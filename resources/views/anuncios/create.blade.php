@extends('layouts.app')

@section('content')

<form action="{{url('/anuncios')}}" method="post" class="container" enctype="multipart/form-data">
    @csrf <!-- - Required for protection or the form is rejected -->
    <div class="form-group">
        <label for="nome_empresa">Nome</label>
     <input id="nome_empresa" type="text" class="form-control" name="nome_empresa" value="{{old('nome')}}">
    </div>
    <div class="form-group">
        <label for="posicao">Posição</label>
        <input type="text" name="posicao" id="posicao" class="form-control" placeholder="Ex. Enfermeiro" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Ex. Profissional Saude" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="pais">Pais</label>
        <input type="text" name="pais" id="pais" class="form-control" placeholder="Ex. Portugal" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="distrito">Distrito/Cidade</label>
        <input type="text" name="distrito" id="distrito" class="form-control" placeholder="Ex. Porto" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="requisitos">Requisitos</label>
        <input type="text" name="requisitos" id="requisitos" class="form-control" placeholder="Ex. 3 anos experiencia, etc..." aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Ex. Full-time" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="contacto">Contacto</label>
        <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Ex. example@example.com" aria-describedby="helpId">
    </div> 
    <button type="submit" class="btn btn-secondary">Create</button>
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