<?php namespace App\Http\Controllers;

use DB;
use Request;
use Auth;
use App\Entidades;
use App\Curso;

use Illuminate\Support\Facades\Input;

class CursoController extends Controller
{
    public function findCurso()
    {
        $userInput = Input::get('findCurso');
        $search = Input::get('findCurso');

        $cursos = DB::table('cursos')->where('nome','LIKE',"%{$search}%")->get();
        $entidades = DB::table('entidades')->get();

        if (empty($userInput)) {
            $cursos = DB::table('cursos')->get();
        }

        return view('listagemCursos')->with('cursos', $cursos)->with('entidades', $entidades);
    }

    public function cursoPaginaIndividual($id){
        $curso= DB::table('cursos')
            ->select('*')
            ->where('Id', '=', $id)
            ->get();

        $avaliacaoCurso = DB::table('avaliacaocurso')->where('curso','=',"%{$id}%")->get();

        return view('cursoIndividual')->with('curso', $curso)->with('avaliacaoCurso', $avaliacaoCurso);
    }

    public function populaDdlComparacao(){
        $cursos = DB::table('cursos')->get();
        $cursos2 = DB::table('cursos')->get();

        return view('compare')->with('cursos', $cursos)->with('cursos2', $cursos2);
    }

    public function compara()
    {
        $cursosID = Input::get('cursosID');
        $cursosID2 = Input::get('cursosID2');

        //

     //   $UserId = Auth::id();

        $curso1 = DB::table('cursos')->where('Id', $cursosID)->get();
        $curso2 = DB::table('cursos')->where('Id', $cursosID2)->get();

        $curso1= DB::table('cursos')
            ->select('*')
            ->where('Id', '=', $cursosID)
            ->get();


        $curso2= DB::table('cursos')
            ->select('*')
            ->where('Id', '=', $cursosID2)
            ->get();



        //

      //  return view('comparacao')->with('cursosID', $cursosID)->with('cursosID2', $cursosID2);
        return view('comparacao')->with('curso1', $curso1)->with('curso2', $curso2);
    }
}