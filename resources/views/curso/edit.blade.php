@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alterar Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('curso.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong> Foram encontrados alguns erros.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  
    <form action="{{ route('curso.update',$curso->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" id="nome" value="{{ $curso->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carga horária:</strong>
                <input type="text" name="carga_horaria" id="carga_horaria" value="{{ $curso->carga_horaria }}" class="form-control" placeholder="Carga Horária somente números">
            </div>
        </div>
        </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
   
    </form>
@endsection