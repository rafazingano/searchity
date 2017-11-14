<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {

    public $perguntas;
    public $respostas;

    public function __construct() {
        $this->perguntas = [
            1 => ['p' => 'De manhã, você', 'r' =>
                [
                    'a' => 'Acorda cedo e come frutas cortadas metodicamente.',
                    'b' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
                    'c' => 'Só consegue lembrar do seu nome depois do café.',
                    'd' => 'Levanta e faz café pra todos da casa.',
                    'e' => 'Passa o café e conserta um erro no HTML.'
                ]
            ],
            2 => ['p' => 'Indo para o trabalho você encontra uma senhora idosa caída na rua', 'r' =>
                [
                    'a' => 'Ela vai atrapalhar seu horário. Oculte o corpo',
                    'b' => 'Levanta a senhora e jura protegê-la com sua vida.',
                    'c' => 'Ajuda-a, mas questiona sua real identidade.',
                    'd' => 'Oferece para caminharem juntos até um destino em comum.',
                    'e' => 'Testa se ela roda bem no Firefox. Não roda.'
                ]
            ],
            3 => ['p' => 'Chega no prédio e o elevador está cheio', 'r' =>
                [
                    'a' => 'Convence parte das pessoas a esperarem o próximo.',
                    'b' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
                    'c' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
                    'd' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
                    'e' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.'
                ]
            ],
            4 => ['p' => 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto', 'r' =>
                [
                    'a' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
                    'b' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
                    'c' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
                    'd' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
                    'e' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.'
                ]
            ],
            5 => ['p' => 'A pauta pegou o dia todo, mas você está indo para casa', 'r' =>
                [
                    'a' => 'Vou chamar aqui o meu Uber.',
                    'b' => 'Pegarei o bus junto com o resto do povo.',
                    'c' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
                    'd' => 'Vou de carro, mas ofereço uma carona para os colegas.',
                    'e' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.'
                ]
            ]
        ];

        $this->respostas = [
            'a' => 'Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação',
            'b' => 'Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática',
            'c' => 'Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo',
            'd' => 'Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros',
            'e' => 'Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia'
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
