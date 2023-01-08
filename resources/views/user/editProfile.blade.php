@extends('layouts.app')

@section ('content')

<style>
</style>

<style>
</style>

<form action="{{ url('users/update',$users->id) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $users->name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Morada:</strong>
                <input type="text" name="morada" value="{{ $users->morada }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zipcode</strong>
                <input type="text" name="zipcode" value="{{ $users->zipcode }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contacto:</strong>
                <input type="text" name="phoneNumber" value="{{ $users->phoneNumber }}" class="form-control"
                    placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-dark">Submit</button>
            <a class="btn btn-dark" href="{{ url('/') }}"> Back</a>
        </div>
    </div>

</form>

@endsection