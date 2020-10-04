@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de cursos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('curso.create') }}"> Cadastrar</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Carga Horária<th>
            <th width="280px">Opções</th>
        </tr>
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->carga_horaria }}</td>
            <td>
                <form action="{{ route('curso.destroy',$curso->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('curso.show',$curso->id) }}">Visualizar</a>
    
                    <a class="btn btn-primary" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection