@extends('layouts.app')

@section('content')
<ul class ="list-group">
    @forelse($anuncios as $anuncio)

    <li class ="list-group-item">
        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1"><strong>{{$anuncio->nome_empresa}}</strong></h4>
                <small>3 days ago</small>
            </div>
            <p class="mb-1"><strong>{{$anuncio->posicao}}</strong></p>
            <p class="mb-1">{{$anuncio->tipo}}</p>
            <small>{{$anuncio->requisitos}}</small>
            <p class="mb-1"><strong>{{$anuncio->distrito}} , {{$anuncio->pais}}</strong></p>
        </a>
    </li>

    @empty
    <h5 class="text-center">Não há anúncios disponíveis!</h5>

    @endforelse
</ul>
@endsection