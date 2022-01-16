<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showAll() //listar todos os anuncios
    {
        $anuncios = Empresas::all();
        return view ('anuncios.main',['anuncios'=>$anuncios]);
    }

    public function AdminDashboard()
    {
        if (Auth::user()->isAdmin != '1'){
            return redirect('/');
        }
            else{
                $user = User::all();
                $anuncio = Empresas::all();
                return view('anuncios.info',['user'=>$user, 'anuncio'=>$anuncio]);
            }
    }

    public function searchan(Request $request){
        $q = $request->get('q');

        $anuncios = Empresas::where ( 'nome_empresa', 'LIKE', '%' . $q . '%' )->orWhere ('posicao','LIKE','%' . $q . '%')->orWhere ('categoria','LIKE','%' . $q . '%')->orWhere ('pais','LIKE','%' . $q . '%')->orWhere ('distrito','LIKE','%' . $q . '%')->orWhere ('tipo','LIKE','%' . $q . '%')->get();
        return view ( 'anuncios.search', ['anuncios'=>$anuncios] );
    }

    public function show(Empresas $anuncios){
        return view('anuncios/showanuncio',['anuncios' =>$anuncios]);
    }

    public function details(Empresas $anuncios){
        return view('anuncios/details',['anuncios'=>$anuncios]);
    }

    public function create(){
        if(Auth::user()->tipo){
            return view('anuncios/create');
        }else{
            return redirect('/');
        }
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

    public function edit(Empresas $anuncios)//editar anuncios
    {
        return view('anuncios.edit', ['anuncios' => $anuncios]);////retorna vista para o edit
    }

    public function update(Request $request, Empresas $anuncios){
        $request->validate([
            'nome_empresa' => 'required',
            'posicao' => 'required',
            'categoria' => 'required',
            'pais' => 'required',
            'distrito' => 'required',
            'requisitos' => 'required',
            'tipo' => 'required',
        ]);

        $anuncios->update($request->all());

        return redirect('/');
    }

    public function destroy(Empresas $anuncios)//carrega delete
    {
        $anuncios->delete();

        return redirect('/anuncios');
    }

    public function AnnouncementCreator()
    {
        return $this->belongsTo(User::class, 'empresas_id', 'id');
    }

    public function showMyAnuncios()
    {
        $anuncios = Empresas::where('empresas_id', Auth()->user()->id);
        if(sizeof($anuncios) > 0){
            return view('anuncios.meusAnuncios',['anuncios' => $anuncios]);
        }else{
            return redirect('/')->with('error','Este Empregador não possui Anuncios criados');
        }
        
    }
}
