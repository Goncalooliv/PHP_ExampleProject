@extends('layouts.app')

@section('content')
<style type="text/css">
  body {
    background: #eee;
    font-family: 'Raleway', sans-serif;
  }

  .main-part {
    width: 80%;
    margin: 0 auto;
    text-align: center;
    padding: 0px 5px;
  }

  .cpanel {
    width: 32%;
    display: inline-block;
    background-color: #34495E;
    color: #fff;
    margin-top: 50px;
  }

  .icon-part i {
    font-size: 30px;
    padding: 10px;
    border: 1px solid #fff;
    border-radius: 50%;
    margin-top: -25px;
    margin-bottom: 10px;
    background-color: #34495E;
  }

  .icon-part p {
    margin: 0px;
    font-size: 20px;
    padding-bottom: 10px;
  }

  .card-content-part {
    background-color: #2F4254;
    padding: 5px 0px;
  }

  .cpanel .card-content-part:hover {
    background-color: #5a5a5a;
    cursor: pointer;
  }

  .card-content-part a {
    color: #fff;
    text-decoration: none;
  }

  .cpanel-blue .icon-part,
  .cpanel-blue .icon-part i {
    background-color: #2980B9;
  }

  .cpanel-blue .card-content-part {
    background-color: #2573A6;
  }
</style>




<div class="main-part">
  <div class="cpanel">
    <div class="icon-part">
      <i class="fa fa-users" aria-hidden="true"></i><br>
      <small>Utilizadores</small>
      <p>{{$countUser}}</p>
    </div>
    <div class="card-content-part">
      <a href="{{ url('dashboard/user') }}">More Details </a>
    </div>
  </div>
  <div class="cpanel cpanel-blue">
    <div class="icon-part">
      <i class="fa fa-tasks" aria-hidden="true"></i><br>
      <small>Anúncios</small>
      <p>{{$countAnuncio}}</p>
    </div>
    <div class="card-content-part">
      <a href="{{ url('dashboard/anuncio') }}">More Details </a>
    </div>
  </div>
</div>

@endsection