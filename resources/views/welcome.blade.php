@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('content')
<style>
    #carouselSlide,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
        size: cover;
    }

    .carousel-caption {
        top: 40%;
        bottom: initial;
    }
</style>
<div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="bg-image">
                <img src="{{URL::to('/carousel1test.jpg')}}" class="d-block w-100" alt="...">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.5)"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h1>Procurar emprego não precisa de ser difícil</h1>
                <h5>Estamos aqui para te ajudar</h5>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-image">
                <img src="{{URL::to('/carousel2.jpg')}}" class="d-block w-100" alt="...">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.5)"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h2>Conhece a equipa de desenvolvimento</h2>
                <a class="btn btn-dark" href="{{('/developteam')}}">Team</a>
            </div>
        </div>
    </div>
</div>


@endsection