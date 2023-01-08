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
                        <th>Anúncio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidaturas as $candidatura)
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">{{$candidatura->id}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$candidatura->nomeCandidato}}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$candidatura->emailCandidato}}</p>
                        </td>
                        <td>
                            <a href="{{$candidatura->file_path}}" download>
                                Curriculo
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection