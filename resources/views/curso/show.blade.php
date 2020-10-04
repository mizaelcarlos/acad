@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Curso </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $curso->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $curso->nome }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                        <a href="{{ url('/curso') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/curso/' . $curso->id . '/edit') }}" title="Edit Curso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar</button></a>

                        <form method="POST" action="{{ url('curso' . '/' . $curso->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Curso" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br/>
                        <br/>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
