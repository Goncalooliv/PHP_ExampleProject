<?php

namespace App\Http\Controllers;


use App\Mail\CandidaturaRecebidaEmail;
use App\Models\Candidatura;
use App\Models\Empresas;
use App\Models\User;
use App\Mail\CandidaturaConfirmEmail;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\FileHelpers;
use Illuminate\Support\Facades\Storage;

class CandidaturaController extends Controller
{

    /**
     * Nesta função são efetuadas queries à base de dados 
     * para verificar se há ou não candidaturas efetuadas
     * a um anúncio especifico
     * 
     */
    public function candidaturasEfetuadas($id){
        $candidaturasAUX = Candidatura::all();
        $candidaturas = $candidaturasAUX->where('idAnuncio', $id);
        
        
        if (sizeof($candidaturas)==0) {
            echo "sadisdabnsdapsd";
            return redirect()->back()->with('error', 'Não existem Candidaturas para esse anúncio.');
        }
        return view('dashboardCandidaturas', ['candidaturas' => $candidaturas]);
    }
    

    /**
     * Função responsável por guardar o ficheiro de currículo dos users que se pretendem candidatar
     * 
     */
    public function enviarCandidatura($idAnuncio, Request $request)
    {

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf|max:4096'
            ]);
            $filename = $request->file->hashName();
            $filePath = $request->file->store('candidaturas');
            error_log($filePath);
                
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

        $announcerId = $anuncio->value('empresas_id');
        $announcerEmail = User::where('id', $announcerId)->value('email');

        $data = ([
            'nome' => $anuncio->nome_empresa,
            'posicao' => $anuncio->posicao,
            'nomeCandidato' => Auth()->user()->name,
            ]);

        $data2 = ([
            'name' => Auth()->user()->name,
            'announcementName' => $anuncio-> nome_empresa,
            'announcementPosition' => $anuncio->posicao,
            'idAnuncio' => $idAnuncio,
        ]);

        Mail::to($email)->send(new CandidaturaConfirmEmail($data));
        Mail::to($announcerEmail)->send(new CandidaturaRecebidaEmail($data2));

        return back()->with('status','Candidatura enviada com sucesso!');
    }
}
