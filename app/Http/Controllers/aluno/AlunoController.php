<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $alunos = DB::table('alunos')
            ->join('aluno_curso', 'alunos.id', '=', 'aluno_curso.aluno_id')
            ->join('cursos', 'cursos.id', '=', 'aluno_curso.curso_id')
            ->select('alunos.nome', 'alunos.id','cursos.nome as curso')
            ->orderby('alunos.id')
            ->get();

            return view('aluno.index', [
                'alunos' => $alunos
                
    
            ]);
    }

    
    public function create()
    {
        //
        $cursos = Curso::all();
        return view('aluno.create', [
            'cursos' => $cursos
			

        ]);



    }

    
    public function store(Request $request)
    {
        //
  
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->save();
        

        $aluno_curso = DB::table('aluno_curso')->insert(
            ['aluno_id' => $aluno->id, 'curso_id' => $request->curso_id]
        );
    
   
        return redirect()->route('aluno.index')
                        ->with('success','Aluno cadastrado com sucesso.');
    }

    
    public function show($id)
    {
        $aluno = Aluno::find($id);
        $curso = DB::table('cursos')
        ->select('cursos.nome as nome')
        ->join('aluno_curso', 'aluno_curso.curso_id', '=', 'cursos.id')
        ->where('aluno_curso.aluno_id', '=', $id)
        ->get();

        return view('aluno.show', [
            'aluno' => $aluno,
            'curso' => $curso
			

        ]);
    }

    
    public function edit($id)
    {
        //
        $aluno = Aluno::find($id);
        $cursos = Curso::all();
        return view('aluno.edit', [
            'aluno' => $aluno,
            'cursos' => $cursos
			

        ]);

    }


    
    public function update(Request $request, $id)
    {
        
        $aluno = DB::table('alunos')
              ->where('id', $id)
              ->update(['nome' => $request->nome]);
        

        $aluno_curso = DB::table('aluno_curso')
        ->where('aluno_id','=',$id)
        ->update(
            ['aluno_id' => $id, 'curso_id' => $request->curso_id]
        );
    

  
        return redirect()->route('aluno.index')
                        ->with('success','Aluno alterado com sucesso');
    }
    

    
    public function destroy($id)
    {
        
        $aluno = Aluno::find($id);
        $aluno->delete();
  
        return redirect()->route('aluno.index')
                        ->with('success','Aluno excluído com sucesso');
    }
}
