@extends('layouts.app')

@section('content')

<style>
    .dashboardoption {
        background: transparent;
    }

    .deletebutton {
        background-color: #E00000;
    }

    .dashboardul {}
</style>


<div class="container-fluid text-center">
    <div class="row flex-nowrap justify-content-center mt-5">
        <div class="col-lg-8 bg3">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">{{$users->id}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$users->name}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$users->email}}</p>
                        </td>
                        <td>
                            <form action="{{ url('users/destroy/'.$users->id) }}" method="POST">
                                <a class="btn btn-secondary btn-sm" href="{{ url('user/show',$users->id)}}">Show</a>
                                @csrf
                                @if($users->isAdmin == 0)
                                <button type="submit" class="btn btn-dark btn-sm deletebutton">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$user->links()}}
        </div>
    </div>
</div>

@endsection