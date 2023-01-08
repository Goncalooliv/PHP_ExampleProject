@extends('layouts.app')

@section('content')

<style>
    .card-header {
        background-color: #333333;
    }

    .form-control:focus {
        outline: none !important;
        box-shadow: none;
        border-color: #333333;
        /* <- this line here */
    }

    .card {
        top: 10%;
    }

    body {
        background-image: url('fundo1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .btn {
        position: relative;

    }

    .btn-text {
        transition: all 0.3s;
    }

    .btn--loading .btn-text {
        visibility: hidden;
        opacity: 0;
    }

    .btn--loading::after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        left: 0;
        right: 0;
        margin: auto;
        border: 3px solid transparent;
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: button-spinner 1s ease infinite;
    }

    @keyframes button-spinner {
        from {
            transform: rotate(0turn);
        }

        to {
            transform: rotate(1turn);
        }
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: #ffffff">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="morada" class="col-md-4 col-form-label text-md-right">{{ __('Morada') }}</label>

                            <div class="col-md-6">
                                <input id="morada" type="text"
                                    class="form-control @error('morada') is-invalid @enderror" name="morada"
                                    value="{{ old('morada') }}" required autocomplete="morada">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('ZipCode')
                                }}</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text"
                                    class="form-control @error('zipcode') is-invalid @enderror" name="zipcode"
                                    value="{{ old('zipcode') }}" required autocomplete="zipcode">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number')
                                }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text"
                                    class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber"
                                    value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="tipo" id="tipo">
                                    <option disabled="disabled" selected="selected" value="null">---Escolha o Tipo de
                                        Utilizador---</option>
                                    <option value="Empregador">Empregador</option>
                                    <option value="Candidato">Candidato</option>
                                </select>

                                @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark" style="background-color: #333333"
                                    onclick="this.classList.toggle('btn--loading')">
                                    <span class="btn-text">Register</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection