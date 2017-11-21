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

        //Curso::with('entidade')->get();

        //$cursos = DB::table('cursos')
          //  ->join('entidades', 'cursos.entidadeid', '=', 'entidades.id')
           // ->select('cursos.nome', 'entidades.nome', 'entidades.id')
           // ->where('cursos.nome','LIKE',"%{$search}%")
           // ->get();

        $entidades = DB::table('entidades')->get();

        if (empty($userInput)) {
            $cursos = DB::table('cursos')->get();
          //  $cursos = App\curso::with('entidade')->get();
           // $cursos = cursos::with('entidade')->get();
        }

        return view('listagemCursos')->with('cursos', $cursos)->with('entidades', $entidades);
    }

    public function cursoPaginaIndividual($id){

        //$curso = Curso::find($id);
       // $curso = DB::table('cursos')->where('Id','=',"%{$id}%")->get();


        $curso= DB::table('cursos')
            ->select('*')
            ->where('Id', '=', $id)
            ->get();



        $avaliacaoCurso = DB::table('avaliacaocurso')->where('curso','=',"%{$id}%")->get();


     //   $avalicaoCurso2 = DB::table('shops_item_restocked')
      //      ->join('itens', 'shops_item_restocked.ItemId', '=', 'itens.id')
     //      ->select('itens.id', 'itens.image', 'itens.price', 'itens.name')
      //      ->where('shopId', '=', $id)
      //      ->get();

        return view('cursoIndividual')->with('curso', $curso)->with('avaliacaoCurso', $avaliacaoCurso);
    }





}