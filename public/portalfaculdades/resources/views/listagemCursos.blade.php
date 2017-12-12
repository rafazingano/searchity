@extends('template.template')
@section('content')
    <meta charset="UTF-8">
    <style>
        #divGeneral{
            padding: 50px;
            margin-left: 100px;
            margin-right: 100px;
            text-align: center;
        }

        #cursoResult{
            padding: 20px;
            margin: 20px;
            text-decoration: none;
        }

        .entidadeLogo{
            height: 200px;
            float: left;

        }

        #cursoResult a{
            text-decoration: none;

        }

        .btnVerMais{
            border: none;
            color: #51d1e1;
            padding: 10px;
            text-align: center;
            margin: 10px;
            font-size: 16px;
        }
    </style>


    <div class="panel panel-default" id="divGeneral">
        <div class="panel-body">
        @foreach ($cursos as $c)

            <div class="panel panel-default" id="cursoResult">
                <div class="panel-body">

                @if ($c->entidadeId == 1)
                    <img src="http://www.pucrs.br/wp-content/themes/pucrs/images/logo_rodape.png" class="entidadeLogo">

                @elseif ($c->entidadeId == 2)
                    <img src="https://cdn.eduadvice.co/partner_images/1x/centro-universitario-senac.png" class="entidadeLogo">

                @elseif ($c->entidadeId == 3)
                    <img src="https://pbs.twimg.com/profile_images/890557416521293824/sGaQ_PGU.jpg" class="entidadeLogo">

                @elseif ($c->entidadeId == 4)
                    <img src="http://essaseoutras.xpg.uol.com.br/wp-content/uploads/2013/11/vestibular-senai-curso-de-tecnologia-inscri%C3%A7%C3%A3o.png" class="entidadeLogo">

                @endif


                <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br> <b><h4>{{$c->Nome}}</h4></b></a>


                @if ($c->turnoId == 1)
                        <br><b>Turno:</b> Manha
                    @elseif ($c->entidadeId == 2)
                        <br><b>Turno:</b> Tarde
                    @elseif ($c->entidadeId == 3)
                        <br><b>Turno:</b> Noite
                    @elseif ($c->entidadeId == 4)
                        <br><b>Turno:</b> Integral
                    @endif

                    <br><b>NotaMEC: </b> {{$c->notaMEC}}
                    <br><b>Nota dos alunos: </b> {{$c->notaAlunos}}

<BR><BR>
                    <div style="float: right" class="btnVerMais">
                        <a href="{{action('CursoController@cursoPaginaIndividual', $c->Id )}}"><br><b>Ver mais</b></a>
                    </div>
</div>
            </div>

    @endforeach
</div>

    </div>
@stop