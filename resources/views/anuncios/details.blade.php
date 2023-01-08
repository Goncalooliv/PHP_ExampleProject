@extends('layouts.app')

@section('content')

<style>
  .image-col {
    text-align: center;
  }

  .card-title {
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: -5px;
  }

  .btndelete {
    background-color: #E00000;
  }

  .optbutton {
    text-align: center;
  }

  .creator-name {
    margin-right: 10px;
  }

  .circle-img {
    width: 75px;
    border-radius: 50%;
  }
</style>

<div class="container-fluid py-3">
  <div class="row">
    <div class="col-lg-3">
      <div class="card mb-4">
        <div class="card-title">
          <strong>Criado por: </strong>
        </div>
        <div class="container mt-2 mb-2">
          <div class="row">
            <div class="col-sm-auto image-col">
              <img src="{{URL::to('/Dev.png')}}" class="circle-img" alt="avatar">
            </div>
            <div class="col-sm text-col">
              <strong>
                {{$user->name}}
              </strong>
              <p>
                <small>Recruiter @ </small>
                <strong>{{$anuncios->nome_empresa}} </strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      @if(Auth::user()->tipo == "Candidato")
      <form method="POST" action="{{url('contactarEmpresa', $anuncios->id)}}" enctype="multipart/form-data">
        @csrf
        <input class=" mb-2 form control" type="file" name="file" required>
        <button type="submit" class="btn btn-dark mb-2">Candidatura</button>
      </form>
      @endif
      @if($anuncios->premium == 0 && Auth::user()->id == $anuncios->empresas_id)
      <a class="btn btn-dark" href="{{ url('/pagamento',$anuncios->id)}}">Premium</a>
      @endif
      @if(Auth::user()->id == $anuncios->empresas_id)
      <a class="btn btn-dark" href="{{ url('anuncios/edit',$anuncios->id)}}">Edit</a>
      <a class="btn btn-dark" href="{{ url('checkCandidaturas',$anuncios->id) }}"> Candidaturas, {{$candidatura}}</a>
      @endif
      <a class="btn btn-dark" href="{{('/anuncios')}}">Back</a>
    </div>
    <div class=" col-lg">
      <div class="card mb-4">
        <div class="card-title">
          <p>
            <strong>Acerca do Anúncio:</strong>
          </p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Nome</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->nome_empresa}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Posição</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->posicao}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Tipo</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->tipo}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Localização</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->distrito}},{{$anuncios->pais}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Requisitos</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->requisitos}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Contacto</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$anuncios->contacto}}
            </div>
          </div>
        </div>
      </div>
      @if(Auth::user()->id == $anuncios->empresas_id)
      <form action="{{ url('anuncios/destroy/'.$anuncios->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-dark btndelete">Delete</button>
      </form>
      @endif
    </div>
  </div>
</div>
@endsection