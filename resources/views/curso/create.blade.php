@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
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
   
 
    <form action="{{ route('curso.store') }}" method="POST" name="formulario" id="formulario">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input name="nome" type="text" id="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carga horária:</strong>
                    <input name="carga_horaria" type="text" id="carga_horaria" class="form-control" placeholder="Carga horária, somente números">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lembrar:</strong>
                    <?php for($i=0;$i<=5;$i++){ 
                        echo 'teste';?>
                    <input class="form-check-input" type="checkbox" name="selecionados[]"  id="selecionados" >
                    <?php } ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="button" class="btn btn-primary" onclick="validarForm()">Salvar</button>
            </div>
        </div>
    
    </form>


<script>
function validarForm(){
    var checkBoxes = document.querySelectorAll("#selecionados");
    var selecionados = 0;
    checkBoxes.forEach(function(el) {
        
    if(el.checked) {
        selecionados++;
    }
    
    });
    
    var checkbox = document.querySelector("#selecionados");
    var nome = document.getElementById("nome").value;
    if (nome == ""){
        
        alert("Digite um nome");
        document.getElementById("nome").focus();
        return;
    }
    else if(selecionados == 0){
        alert("Clique em lembrar");
        return;
    }
    else{
        document.getElementById("formulario").submit();
        return;
    }

}
</script>

@endsection