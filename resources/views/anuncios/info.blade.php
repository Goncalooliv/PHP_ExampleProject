@extends('layouts.app')

@section('content')
<div class="row">
  <div class="table-responsive col-md-6">
            <table class="table table-striped" id="utilizadores">
              <thead>
                <tr>
                  <th class="col-md-1">#</th>
                  <th class="col-md-2">Nome</th>
                  <th class="col-md-3">Email</th>
                  <th class="col-md-4">Opção</th>
                </tr>
              </thead>
              <tbody>
                @forelse($user as $users)
                <tr>
                  <td class="col-md-1">{{$users->id}}</td>
                  <td class="col-md-2">{{$users->name}}</td>
                  <td class="col-md-3">{{$users->email}}</td>
                  <td class="col-md-4">
                  <form action="{{ url('users/destroy/'.$users->id) }}" method="POST">
                    <a class="btn btn-secondary btn-sm" href="{{ url('user/show',$users->id)}}">Show</a>
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                  </form>
                  </td>
                </tr>
                @empty
                <h5 class="text-center">Não há utilizadores para mostrar!</h5>

                @endforelse
              </tbody>
            </table>
          </div>
          <div class="table-responsive col-md-6">
            <table class="table table-striped" id = "empresa">
              <thead>
                <tr>
                  <th class="col-md-1">#</th>
                  <th class="col-md-2">Empresa</th>
                  <th class="col-md-3">Localização</th>
                  <th class="col-md-4">Opção</th>
                </tr>
              </thead>
              <tbody>
                @forelse($anuncio as $anuncios)
                <tr>
                  <td class="col-md-1">{{$anuncios->id}}</td>
                  <td class="col-md-2">{{$anuncios->nome_empresa}}</td>
                  <td class="col-md-3">{{$anuncios->distrito}},{{$anuncios->pais}}</td>
                  <td class="col-md-4">
                  <form action="{{ url('anuncios/destroy/'.$anuncios->id) }}" method="POST">
                  <a class="btn btn-secondary btn-sm" href="{{ url('anuncios/showanuncio', $anuncios->id)}}">Show</a>
                  <a class="btn btn-secondary btn-sm" href="{{ url('anuncios/edit', $anuncios->id)}}">Edit</a>
                  @csrf 
                  <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                  </td>
                </tr>
                @empty
                <h5 class="text-center">Não há Empresas para mostrar!</h5>

                @endforelse
                
              </tbody>
            </table>
            <a class= "btn btn-secondary" href="{{ url('anuncios/create')}}">Create</a>
            <script type="text/javascript">
              $(document).ready(function() 
            { 
                $('#empresa').DataTable( 
              { 
                "lengthMenu":[[2,5,10,-1],[2,5,10,"All"]],
                dom: 'Blfrtip',
                buttons: [
                  {
                    extend: 'excelHtml5',
                    title : 'Excel MK',
                    text: 'Export to Excel'
                  },
                  {
                    extend: 'pdfHtml5',
                    title: 'PDF MK',
                    classname: 'btn_pdf',
                    text: 'Export to PDF'
                  },
                ]
              });

            });
            </script>
</div>
@endsection