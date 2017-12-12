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
        }

        .entidadeLogo{
            height: 200px;
        }

        a{
            text-decoration: none;
        }
    </style>

    <div class="panel panel-default" id="divGeneral">

        <div class="panel-body">
        @foreach ($curso as $c)

                <div style="float: left">
                @if ($c->entidadeId == 1)
                    <img src="http://www.pucrs.br/wp-content/themes/pucrs/images/logo_rodape.png" class="entidadeLogo">
                @elseif ($c->entidadeId == 2)
                    <img src="https://cdn.eduadvice.co/partner_images/1x/centro-universitario-senac.png" class="entidadeLogo">
                @elseif ($c->entidadeId == 3)
                    <img src="https://pbs.twimg.com/profile_images/890557416521293824/sGaQ_PGU.jpg" class="entidadeLogo">
                @elseif ($c->entidadeId == 4)
                    <img src="http://essaseoutras.xpg.uol.com.br/wp-content/uploads/2013/11/vestibular-senai-curso-de-tecnologia-inscri%C3%A7%C3%A3o.png" class="entidadeLogo">
                @endif
</div>

            <div id="infoDB">

                <h2>    {{$c->Nome}} </h2>

                    @if ($c->turnoId == 1)
                        <br><b>Turno:</b> Manha
                    @elseif ($c->turnoId == 2)
                        <br><b>Turno:</b> Tarde
                    @elseif ($c->turnoId == 3)
                        <br><b>Turno:</b> Noite
                    @elseif ($c->turnoId == 4)
                        <br><b>Turno:</b> Integral
                    @endif

                    <br><b>NotaMEC: </b> {{$c->notaMEC}}
                    <br><b>Nota dos alunos: </b> {{$c->notaAlunos}}


        <br><br><br><br><br>

                <div>
            {!!html_entity_decode($c->Conteudo)!!}
                </div>

        @endforeach

            </div>


            <div id="avaliacaoCurso">

            @foreach ($avaliacaoCurso as $a)

                {{$a->Conteudo}}

            @endforeach

            </div>

        </div>
    </div>
@stop









