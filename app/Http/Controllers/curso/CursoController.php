<?php

namespace App\Http\Controllers\curso;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    
    public function index()
    {
        
        $cursos = Curso::all();

            return view('curso.index', [
                'cursos' => $cursos
                
    
            ]);
    }

    
    public function create()
    {
        
        return view('curso.create');
    }

    
    public function store(Request $request)
    {
        
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->carga_horaria = $request->carga_horaria;
        $curso->save();
    
   
        return redirect()->route('curso.index')
                        ->with('success','Curso cadastrado com sucesso.');
    }

    
    public function show($id)
    {
        
        $curso = Curso::find($id);
        return view('curso.show', [
            'curso' => $curso			

        ]);
    }

    
    public function edit($id)
    {
        //
        $curso = Curso::find($id);
        return view('curso.edit', [
            'curso' => $curso		

        ]);
    }

    
    public function update(Request $request, $id)
    {
        
        $curso = DB::table('cursos')
              ->where('id', $id)
              ->update(['nome' => $request->nome, 'carga_horaria' => $request->carga_horaria]);
    

  
        return redirect()->route('curso.index')
                        ->with('success','Aluno alterado com sucesso');
    }

    
    public function destroy($id)
    {
        
        $curso = Curso::find($id);
        $curso->delete();
  
        return redirect()->route('curso.index')
                        ->with('success','Aluno excluído com sucesso');
    }
}
