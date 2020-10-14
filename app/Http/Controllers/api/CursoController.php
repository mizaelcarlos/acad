<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //
   

    public function index(){

       $cursos = Curso::all();
       return response()->json($cursos);
    }

    public function show($id){

        $curso = Curso::find($id);

        if(!$curso){

            return response()->json([
                'message' => 'Registro não encontrado'
            ], 404);

        }
        return response()->json($curso);
    }

    public function store(Request $request){

        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->carga_horaria = $request->carga_horaria;
        $curso->save();

        return response()->json($curso, 201);

    }
}
