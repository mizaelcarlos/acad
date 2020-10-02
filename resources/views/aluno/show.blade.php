<h2>Aluno Name: </h2>
<p>{{ $aluno->nome }}</p>

<h3>Aluno Belongs to</h3>

<ul>
    @foreach($aluno->cursos as $curso)
    <li>{{ $curso->nome }}</li>
    @endforeach
</ul>