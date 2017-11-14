<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller {

    public function index($etapa = 1) {
        if ($etapa <= 1) {
            session(['respostas' => null]);
        }
        $data['etapa'] = $etapa;
        $quiz = new Quiz;
        $perguntas = $quiz->perguntas();
        abort_if($etapa > count($perguntas), 404);
        $data['pergunta'] = $perguntas[$etapa];
        return view('quiz', $data);
    }

    public function update(Request $request, $etapa = 1) {
        $respostas = session('respostas', []);
        $respostas[$etapa] = $request->input('resposta');
        session(['respostas' => $respostas]);
        $quiz = new Quiz;
        $perguntas = $quiz->perguntas();
        if ($etapa >= count($perguntas)) {
            return redirect()->route('resposta');
        }
        return redirect()->route('etapa', $etapa + 1);
    }

    public function resposta() {
        $respostas = session('respostas');
        $quiz = new Quiz;
        $data['resposta'] = $quiz->resposta($respostas);
        return view('resposta', $data);
    }

}
