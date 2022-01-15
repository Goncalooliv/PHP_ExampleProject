@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <form>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height:560px;width:960px" src="{{URL::to('/carousel1.png')}}" class="d-block w-100" alt="first">
            </div>
            <div class="carousel-item">
                <img style="height:560px;width:960px" src="{{URL::to('/carousel2.png')}}" class="d-block w-100" alt="second">
            </div>
            <div class="carousel-item">
                <img style="height:560px;width:960px" src="{{URL::to('/carousel3.png')}}" class="d-block w-100" alt="third">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="position:relative;right:15%;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="position:relative;left:15%;"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
@endsection

