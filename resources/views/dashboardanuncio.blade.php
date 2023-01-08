@extends('layouts.app')

@section('content')

<style>
    .dashboardoption {
        background: transparent;
    }

    .deletebutton {
        background-color: #E00000;
    }

    .dashboardul {}
</style>


<div class="container-fluid text-center">
    <div class="row flex-nowrap justify-content-center mt-5">
        <div class="col-lg-8 bg3">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Contacto</strong></th>
                        <th><strong>Posição</strong></th>
                        <th><strong>Local</strong></th>
                        <th><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anuncio as $anuncios)
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">{{$anuncios->id}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$anuncios->nome_empresa}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$anuncios->contacto}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$anuncios->posicao}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$anuncios->distrito}}</p>
                        </td>
                        <td>
                            <form action="{{ url('anuncios/destroy/'.$anuncios->id) }}" method="POST">
                                <a class="btn btn-secondary btn-sm"
                                    href="{{ url('anuncios/details', $anuncios->id)}}">Show</a>
                                @csrf
                                <button type="submit" class="btn btn-dark btn-sm deletebutton">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$anuncio->links()}}
        </div>
    </div>
</div>

@endsection