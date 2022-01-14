@extends('layouts.app')

@section('content')

<div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Nome Empresa</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->nome_empresa}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Posição</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->posicao}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Categoria</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->categoria}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Localização</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->distrito}} , {{$anuncios->pais}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Requisitos</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->requisitos}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Tipo</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->tipo}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><strong>Contacto</strong></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$anuncios->contacto}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-secondary" href="{{('/anuncios')}}">Back</a>
                    </div>
                  </div>
                </div>
              </div>
@endsection