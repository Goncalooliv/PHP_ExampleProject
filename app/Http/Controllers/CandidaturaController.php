<?php

namespace App\Http\Controllers;


use App\Models\Candidatura;
use App\Models\Empresas;
use App\Models\User;
use App\Mail\CandidaturaConfirmEmail;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CandidaturaController extends Controller
{

    public function candidaturasEfetuadas($id){
        $candidaturasAUX = Candidatura::all();
        $candidaturas = $candidaturasAUX->where('idAnuncio', $id);
        
        
        if (sizeof($candidaturas)==0) {
            echo "sadisdabnsdapsd";
            return redirect()->back()->with('error', 'Não existem Candidaturas para esse anúncio.');
        }
        return view('dashboardCandidaturas', ['candidaturas' => $candidaturas]);
    }
    

    public function enviarCandidatura($idAnuncio, Request $request)
    {
           
            //$fileName = $request->file->getClientOriginalName();
            //$filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $filePath = $request->file->storeAs('uploads',$filename,'public');
            error_log($filePath);
                
            /*Debugbar::info($filename);*/
        }


        Candidatura::create([
            'nomeCandidato' => Auth()->user()->name,
            'idCandidato' => Auth()->user()->id,
            'emailCandidato' => Auth()->user()->email,
            'file_name' => $filename,
            'file_path'=> $filePath,
            'idAnuncio' => $idAnuncio,
        ]);

        $email = Auth()->user()->email;

        $anuncio = Empresas::where('id', $idAnuncio)->first();

        $data = ([
            'nome' => $anuncio->nome_empresa,
            'posicao' => $anuncio->posicao,
            'nomeCandidato' => Auth()->user()->name,
            ]);

        Mail::to($email)->send(new CandidaturaConfirmEmail($data));

        return view('welcome')->with('success','Candidatura enviada com sucesso!');
    }
}
