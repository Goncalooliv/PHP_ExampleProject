<?php

namespace App\Http\Controllers;

use App\Models\Candidatura;
use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Barryvdh\Debugbar\Facades\Debugbar;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showAll() //listar todos os anuncios
    {
        $anuncios = Empresas::orderBy('premium', 'desc')->paginate(5);
        return view ('anuncios.main',['anuncios'=>$anuncios]);
    }

    public function meusAnuncios(){
        if(Auth::user()->tipo == 'Empregador'){
            $anuncios = Empresas::where('empresas_id', Auth::user()->id)->paginate(5);
            return view('anuncios.meusAnuncios', ['anuncios' => $anuncios]);
        }
        else{
            return view('/');
        }
    }

    public function AdminDashboard()
    {
        if (Auth::user()->isAdmin != '1'){
            return redirect('/');
        }
            else{
                $userCount = User::count();
                $anuncioCount = Empresas::count();
                return view('dashboard',['countUser'=>$userCount, 'countAnuncio'=>$anuncioCount]);
            }
    }

    public function dashboardUser(){
        if (Auth::user()->isAdmin != '1'){
            return redirect('/');
        }
            else{
                $user = User::paginate(10);
                return view('dashboarduser',['user'=>$user]);
            }
    }

    public function dashboardAnuncio(){
        if (Auth::user()->isAdmin != '1'){
            return redirect('/');
        }
            else{
                $anuncio = Empresas::paginate(10);
                return view('dashboardanuncio',['anuncio'=>$anuncio]);
            }
    }

    public function searchan(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        $anuncios = Empresas::orderBy('premium', 'desc')->orWhere('nome_empresa', 'LIKE', "%{$search}%" )->orWhere('pais', 'LIKE', "%{$search}%")->orWhere('posicao', 'LIKE', "%{$search}%" )->paginate(5);
        return view ( 'anuncios.main', ['anuncios'=>$anuncios] );
    }

    public function show(Empresas $anuncios){
        return view('anuncios.showanuncio',['anuncios' =>$anuncios]);
    }

    public function details($id){
        $anuncios = Empresas::find($id);
        $user = User::find($anuncios->empresas_id);
        $candidaturas = Candidatura::where('idAnuncio', $id)->count();
        return view('anuncios.details',['anuncios'=>$anuncios,'user' => $user,'candidatura' => $candidaturas]);
    }

    public function createPageShow(){
        if(Auth::user()->tipo == 'Empregador' || Auth::user()->isAdmin == '1'){
            return view('anuncios.create');
        }else{
            return redirect('/');
        }
    }

    public function createAnuncio(Request $request){

        $validator = Validator::make($request->all(),[
            'nome_empresa' => 'required',
            'posicao' => 'required',
            'categoria' => 'required',
            'pais' => 'required',
            'distrito' => 'required',
            'requisitos' => 'required',
            'tipo' => 'required',
            'contacto' => 'required',
        ]);

        if($validator->fails()){
            return redirect('anuncios/create')
            ->withErrors($validator)
            ->withInput();
        }

        $validated = $validator->validated();
        $date = date('d/m/Y');

        Empresas::create([
            'nome_empresa' => $validated['nome_empresa'],
            'posicao' => $validated['posicao'],
            'categoria' => $validated['categoria'],
            'pais' => $validated['pais'],
            'distrito' => $validated['distrito'],
            'requisitos' => $validated['requisitos'],
            'tipo' => $validated['tipo'],
            'contacto' => $validated['contacto'],
            'premium' => 0,
            'empresas_id' => Auth()->user()->id,
            'date' => $date,
        ]);


        return redirect('/meusAnuncios')->with('success', 'Anuncio created successfully.');
    }

    public function store(Request $request){
        $request->validate([
            'nome_empresa' => 'required',
            'posicao' => 'required',
            'categoria' => 'required',
            'pais' => 'required',
            'distrito' => 'required',
            'requisitos' => 'required',
            'tipo' => 'required',
            'contacto' => 'required',
        ]);

        $anuncio = new Empresas();
        $anuncio->nome_empresa=$request->nome_empresa;//nome vai ser este novo nome
        $anuncio->posicao=$request->posicao;//o dado q pomos no site é guardado neste pedido q nos permite usar aqui
        $anuncio->categoria=$request->categoria;
        $anuncio->pais=$request->pais;
        $anuncio->distrito=$request->distrito;
        $anuncio->requisitos=$request->requisitos;
        $anuncio->empresas_id = Auth()->user()->id;
        $anuncio->tipo=$request->tipo;
        $anuncio->contacto=$request->contacto;

        $anuncio->save();

        return redirect('/anuncios')->with('success', 'Anuncio created successfully.');
    }

    public function edit($id)//editar anuncios
    {
        $anuncio = Empresas::find($id);
        return view('anuncios.edit', ['anuncios' => $anuncio]);////retorna vista para o edit
    }

    public function update(Request $request, $id){
        $anuncio = Empresas::where('id', $id)
        ->update([
            'nome_empresa' => $request['nome_empresa'],
            'posicao' => $request['posicao'],
            'categoria' => $request['categoria'],
            'pais' => $request['pais'],
            'distrito' => $request['distrito'],
            'requisitos' => $request['requisitos'],
            'tipo' => $request['tipo'],
        ]);

        return redirect('/meusAnuncios');
    }

    public function destroy($id)//carrega delete
    {
        if(Empresas::find($id)){
            Empresas::destroy($id);
        }

        return redirect('/dashboard/anuncio');
    }

    public function AnnouncementCreator()
    {
        return $this->belongsTo(User::class, 'empresas_id', 'id');
    }

    public function showMyAnuncios()
    {
        $anuncios = Empresas::where('empresas_id', Auth()->user()->id);
        if(sizeof($anuncios)){
            return view('anuncios.meusAnuncios',['anuncios' => $anuncios]);
        }else{
            return redirect('/')->with('error','Este Empregador não possui Anuncios criados');
        }
        
    }
}
