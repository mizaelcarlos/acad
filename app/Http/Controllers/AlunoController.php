<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    //

    public function create(Request $request)
    {
        $aluno= new Aluno;
        $aluno->nome = 'Mizael';

        $aluno->save();

        $curso = curso::find([3, 4]);
        $aluno->cursos()->attach($curso);

        return 'Success';
    }

    public function show(Aluno $aluno)
    {
    	return view('aluno.show', compact('aluno'));
    }

    public function removeCurso(Aluno $aluno)
	{
        $curso = Curso::find(3);

        $aluno->cursos()->detach($cursos);
        
        return 'Success';
	}
}
