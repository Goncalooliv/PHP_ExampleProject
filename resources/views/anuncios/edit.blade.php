@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Anuncio</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-secondary" href="{{ url('/dashboard') }}"> Back</a>
        </div>
    </div>
</div>


<form action="{{ url('/anuncios/update/'.$anuncios->id) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome_empresa" value="{{ $anuncios->nome_empresa }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Posição:</strong>
                <input type="text" name="posicao" value="{{ $anuncios->posicao }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                <input type="text" name="categoria" value="{{ $anuncios->categoria }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pais:</strong>
                <input type="text" name="pais" value="{{ $anuncios->pais }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Distrito/Cidade:</strong>
                <input type="text" name="distrito" value="{{ $anuncios->distrito }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Requisitos:</strong>
                <input type="text" name="requisitos" value="{{ $anuncios->requisitos }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo:</strong>
                <input type="text" name="tipo" value="{{ $anuncios->tipo }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </div>

</form>
@endsection