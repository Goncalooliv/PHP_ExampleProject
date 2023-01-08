@extends('layouts.app')

@section('content')

<style>
  .circle-img {
    width: 125px;
    border-radius: 50%;
    text-align: center;
  }

  .image-col {
    text-align: center;
  }

  .card-title {
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: -5px;
  }
</style>

<div class="container-fluid py-3">
  <div class="row justify-content-center">
    <div class="col-lg-3">
      <div class="card mb-4">
        <div class="card-body">
          <div class="col-sm-auto image-col">
            <img src="{{URL::to('/Dev.png')}}" class="circle-img" alt="avatar">
            <h4>{{$users->name}}</h4>
            <p class="text-secondary mb-1">{{$users->email}}</p>
            @if(Auth::user()->id == $users->id)
            <a class="btn btn-secondary btn-sm" href="{{ url('users/edit',$users->id)}}">Edit</a>
            @endif
            @if(Auth::user()->isAdmin == 1)
            <a class="btn btn-secondary btn-sm" href="{{('/dashboard/user')}}">Back</a>
            @else
            <a class="btn btn-secondary btn-sm" href="{{('/')}}">Back</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-title">
          <p>
            <strong>Dados de Utilizador:</strong>
          </p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Nome</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$users->name}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$users->email}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Contact</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$users->phoneNumber}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Morada</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$users->morada}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">ZipCode</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$users->zipcode}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection