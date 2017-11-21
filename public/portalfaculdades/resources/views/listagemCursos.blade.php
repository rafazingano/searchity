@extends('template.template')
@section('content')

    <style>
        #divGeneral{
            padding: 50px;
            margin-left: 100px;
            margin-right: 100px;
            text-align: center;
        }

        #cursoResult{
            padding: 50px;
            margin: 20px;
            text-decoration: none;
        }

        .entidadeLogo{
            height: 100px;
        }

        #cursoResult a{
            text-decoration: none;
        }
    </style>


    <div class="panel panel-default" id="divGeneral">

        @foreach ($cursos as $c)

            <div class="panel panel-default" id="cursoResult">

                @if ($c->entidadeId == 1)
                    <img src="http://www.pucrs.br/wp-content/themes/pucrs/images/logo_rodape.png" class="entidadeLogo">
                    <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br> <b><h3>{{$c->Nome}}</h3></b></a>
                    <br><b>Faculdade:</b> PUCRS

                @elseif ($c->entidadeId == 2)
                    <img src="https://cdn.eduadvice.co/partner_images/1x/centro-universitario-senac.png" class="entidadeLogo">
                    <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br> <b><h3>{{$c->Nome}}</h3></b></a>
                    <br><b>Faculdade:</b> Faculdade Senac Porto Alegre - Senac-RS

                @elseif ($c->entidadeId == 3)
                    <img src="https://pbs.twimg.com/profile_images/890557416521293824/sGaQ_PGU.jpg" class="entidadeLogo">
                    <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br> <b><h3>{{$c->Nome}}</h3></b></a>
                    <br><b>Faculdade:</b> Unisinos

                @elseif ($c->entidadeId == 4)
                    <img src="http://essaseoutras.xpg.uol.com.br/wp-content/uploads/2013/11/vestibular-senai-curso-de-tecnologia-inscri%C3%A7%C3%A3o.png" class="entidadeLogo">
                    <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br> <b><h3>{{$c->Nome}}</h3></b></a>
                    <br><b>Faculdade:</b> Faculdade SENAI de Tecnologia

                @endif

                @if ($c->turnoId == 1)
                        <br><b>Turno:</b> Manhã
                    @elseif ($c->entidadeId == 2)
                        <br><b>Turno:</b> Tarde
                    @elseif ($c->entidadeId == 3)
                        <br><b>Turno:</b> Noite
                    @elseif ($c->entidadeId == 4)
                        <br><b>Turno:</b> Integral
                    @endif

                    <br><b>NotaMEC: </b> {{$c->notaMEC}}
                    <br><b>Avaliação de alunos: </b> {{$c->notaAlunos}}

            </div>

    @endforeach


    </div>
@stop