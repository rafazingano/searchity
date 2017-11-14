<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {

    public $perguntas;
    public $respostas;

    public function __construct() {
        $this->perguntas = [
            1 => ['p' => 'Como você encara o fato de se apresentar para outras pessoas?', 'r' =>
                [
                    'a' => 'Chato, pois prefiro a vida na matrix.',
					'b' => 'Impossivel, pois não participo de convencões sociais.',
                    'c' => 'Nao gosto, pois sou timido, mas isso nao vai me impedir.',
                    'd' => 'Gosto muito, todos tem o direito de saber quem sou.',
                    'e' => 'Nao me encaixo em nenhuma resposta.'
                ]
            ],
            2 => ['p' => 'Como você age quando tem que ler um livro?', 'r' =>
                [
                    'a' => 'Busco o resumo e leio algumas paginas.',
                    'b' => 'Se o livro for interessante eu tento ler.',
                    'c' => 'Leio pois tenho responsabilidades a cumprir.',
                    'd' => 'Leio para expressar minhas criticas e opinioes.',
                    'e' => 'Nao me encaixo em nenhuma resposta.'
                ]
            ],
            3 => ['p' => '3 - Que tipo de filmes e series você assiste?', 'r' =>
                [
                    'a' => 'Documentarios, Ficcao cientifica e batalhas medievais.',
                    'b' => 'Serial Killers, Terror, Animal planet.',
                    'c' => 'Comedia, Drama, Suspense.',
                    'd' => 'Comedia pastelão, Romance, Espirita.',
                    'e' => 'Nao me encaixo em nenhuma resposta.'
                ]
            ],
            4 => ['p' => 'Como voce age sob pressao?', 'r' =>
                [
                    'a' => 'Frio, calculista, tentando sempre manter a logica.',
                    'b' => 'Explodo e nao penso em mais nada, fod-se tudo to nem ae.',
                    'c' => 'Preocupado tentando manter a calma.',
                    'd' => 'Nervoso tentando reverter a situacao a meu favor.',
                    'e' => 'Nao me encaixo em nenhuma resposta.'
                ]
            ],
            5 => ['p' => 'Que voce gosta de fazer nas horas vagas?', 'r' =>
                [
                    'a' => 'Jogos, Series, Buscar novidades..',
                    'b' => 'Ficar sentado em lugares publicos observando as pessoas.',
                    'c' => 'Ficar com a familia, escutar boa musica, conversar com amigos.',
                    'd' => 'Viajar, praticar atividades fisicas, ler.',
                    'e' => 'Nao me encaixo em nenhuma resposta.'
                ]
            ]
        ];

        $this->respostas = [
            'a' => 'Indicamos a você buscar algum curso na area de exatas, pois suas respostas praticas podem indicar uma facilidade ao raciocinio logico.',
            'b' => 'Indicamos a procurar ajuda de um profissional para analise do seu perfil.',
            'c' => 'Indicamos a busca de cursos voltados aos bastidores de uma empresa, onde seu perfil analitico sera de grande ajuda.',
            'd' => 'Você geralmente e o centro das atencoes, busque cursos onde você podera expressar suas ideias e opiniões. Cursos onde suas ideias possam ser ouvidas e inspiradoras para inovacões.',
            'e' => 'Indicamos a procurar ajuda de um profissional para analise do seu perfil.'
        ];
    }

    public function perguntas() {
        return $this->perguntas;
    }

    public function resposta($respostas) {
        $array = array_count_values($respostas);
        $qau = array_unique($array);
        if ((count($array) === count($qau))) {
            arsort($array);
            $top_array = array_search(max($array), $array);
        } else {
            foreach ($respostas as $k => $v) {
                $cal[$v] = isset($cal[$v]) ? $k + $cal[$v] : $k;
            }
            arsort($cal);
            $top_array = array_search(max($cal), $cal);
        }
        return $this->respostas[$top_array];
    }

}
