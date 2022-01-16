@extends('layouts.app')

@section('content')
<div class="row">
    <div class="table-responsive col-md-6">
        <table class="table table-striped">
        <caption>Tabela de Empresas</caption>
            <thead>
                <tr>
                  <th id="id" class="col-md-1">#</th>
                  <th id="empresa" class="col-md-2">Empresa</th>
                  <th id="location" class="col-md-3">Localização</th>
                  <th id="option" class="col-md-4">Opção</th>
                </tr>
            </thead>
            <tbody>
                @forelse($anuncios as $anuncio)
                    <tr>
                        <td class="col-md-1">{{$anuncio->id}}</td>
                        <td class="col-md-2">{{$anuncio->nome_empresa}}</td>
                        <td class="col-md-3">{{$anuncio->distrito}},{{$anuncio->pais}}</td>
                        <td class="col-md-4">
                        <form action="{{ url('anuncios/destroy/'.$anuncio->id) }}" method="POST">
                        <a class="btn btn-secondary btn-sm" href="{{ url('anuncios/showanuncio', $anuncio->id)}}">Show</a>
                        <a class="btn btn-secondary btn-sm" href="{{ url('anuncios/edit', $anuncio->id)}}">Edit</a>
                        @csrf 
                        <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                        </td>
                    </tr>
                @empty
                <h5 class="text-center">Não há Empresas para mostrar!</h5>

                @endforelse
</div>
@endsection