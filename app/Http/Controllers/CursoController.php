<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cursos = Curso::all();

            return view('curso.index', [
                'cursos' => $cursos
                
    
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->carga_horaria = $request->carga_horaria;
        $curso->save();
    
   
        return redirect()->route('curso.index')
                        ->with('success','Curso cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $curso = Curso::find($id);
        return view('curso.show', [
            'curso' => $curso			

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $curso = Curso::find($id);
        return view('curso.edit', [
            'curso' => $curso		

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $curso = DB::table('cursos')
              ->where('id', $id)
              ->update(['nome' => $request->nome, 'carga_horaria' => $request->carga_horaria]);
    

  
        return redirect()->route('curso.index')
                        ->with('success','Aluno alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $curso = Curso::find($id);
        $curso->delete();
  
        return redirect()->route('curso.index')
                        ->with('success','Aluno excluído com sucesso');
    }
}
