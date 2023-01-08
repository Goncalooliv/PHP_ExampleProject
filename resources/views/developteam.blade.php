@extends('layouts.app')

@section('content')

<style>
    hr {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .circle-img img {
        width: 150px;
        border-radius: 50%;
    }
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="circle-img">
                        <img src="{{URL::to('/Dev.png')}}" alt="avatar">
                    </div>
                    <h5 class="my-3">Gonçalo Oliveira</h5>
                    <p class="text-muted mb-1">UFP Student</p>
                    <p class="text-muted mb-0">Penafiel, Porto, Portugal</p>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <img width="20px" src="{{URL::to('/github.png')}}" alt="github icon">
                            <a href="https://github.com/Goncalooliv" target="_blank" class="stretched-link"></a>
                            <p class="mb-0">Goncalooliv</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <a href="https://twitter.com/Baguetes1" target="_blank" class="stretched-link"></a>
                            <p class="mb-0">@Baguetes1</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <img width="20px" src="{{URL::to('/instagram.png')}}" alt="instagram icon">
                            <a href="https://www.instagram.com/goncaloo_olv" target="_blank" class="stretched-link"></a>
                            <p class="mb-0">goncaloo_olv</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <a href="https://www.facebook.com/GoncaloOliv28" target="_blank" class="stretched-link"></a>
                            <p class="mb-0">GoncaloOliv28</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <img width="20px" src="{{URL::to('/linkedin.png')}}" alt="linkedin icon">
                            <a href="https://www.linkedin.com/in/goncalooliv2800/" target="_blank"
                                class="stretched-link"></a>
                            <p class="mb-0">goncalooliv2800</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0"><strong>Full Name</strong></p>
                            <p class="text-muted mb-0">Gonçalo Oliveira</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0"><strong>Email</strong></p>
                            <p class="text-muted mb-0">andreoliveira280100@gmail.com</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0"><strong>Mobile</strong></p>
                            <p class="text-muted mb-0">(351) 915400200</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0"><strong>Address</strong></p>
                            <p class="text-muted mb-0">Penafiel, Porto, Portugal</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-4">
                        <strong>Description:</strong>
                    </p>
                    <p>
                        Projeto desenvolvido no âmbito da unidade curricular de Laboratório de Programação onde
                        está a ser desenvolvida uma plataforma web para a divulgação de Anúncios de
                        Emprego, Voluntariado e Estágio com recurso à linguagem de Programação PHP e à
                        framework Laravel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection