@extends('layouts.app')

@section('content')
<div class="col d-flex justify-content-center">
    <div class="card" style="width: 20rem">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h4>{{$users->name}}</h4>
                    <p class="text-secondary mb-1">{{$users->email}}</p>
                    <a class="btn btn-secondary btn-sm" href="{{('/dashboard')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection