@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de alunos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aluno.create') }}"> Cadastrar</a>
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
            <th>Curso</th>
            <th width="280px">Opções</th>
        </tr>
        @foreach ($alunos as $aluno)
        <tr>
            <td>{{ $aluno->id }}</td>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->curso }}</td>
            <td>
                <form action="{{ route('aluno.destroy',$aluno->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('aluno.show',$aluno->id) }}">Visualizar</a>
    
                    <a class="btn btn-primary" href="{{ route('aluno.edit',$aluno->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection