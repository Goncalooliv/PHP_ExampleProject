@extends('layouts.app')

@section('content')

<form action="{{route('createAnuncio')}}" method="post" class="container" enctype="multipart/form-data">
    @csrf
    <!-- - Required for protection or the form is rejected -->
    <div class="form-group mb-1">
        <label for="nome_empresa"><strong>Nome Empresa</strong></label>
        <input id="nome_empresa" type="text" class="form-control @error('Nome') is-invalid @enderror"
            name="nome_empresa" value="{{old('nome')}}" placeholder="Ex: Sony">

        @error('Nome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="form-group mb-1">
        <label for="posicao"><strong>Posição</strong></label>
        <input type="text" name="posicao" id="posicao" class="form-control" placeholder="Ex: Enfermeiro"
            aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="categoria"><strong>Categoria</strong></label>
        <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Ex: Profissional Saude"
            aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="pais"><strong>Pais</strong></label>
        <input type="text" name="pais" id="pais" class="form-control" placeholder="Ex: Portugal"
            aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="distrito"><strong>Distrito/Cidade</strong></label>
        <input type="text" name="distrito" id="distrito" class="form-control" placeholder="Ex: Porto"
            aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="requisitos"><strong>Requisitos</strong></label>
        <input type="text" name="requisitos" id="requisitos" class="form-control"
            placeholder="Ex. 3 anos experiencia, etc..." aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="tipo"><strong>Tipo</strong></label>
        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Ex: Emprego"
            aria-describedby="helpId">
    </div>
    <div class="form-group mb-1">
        <label for="contacto"><strong>Contacto</strong></label>
        <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Ex: example@example.com"
            aria-describedby="helpId">
    </div>
    <button type="submit" class="btn btn-dark">Create</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection