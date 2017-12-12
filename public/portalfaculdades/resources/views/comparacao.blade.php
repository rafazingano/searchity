@extends('template.template')
@section('content')

    <style>
        #divGeneral{
            padding: 50px;
            margin-left: 100px;
            margin-right: 100px;
            text-align: center;
        }

        a{
            text-decoration: none;
        }

        .tableAtributo{
            border-style: solid;
            border: 1px;
            border-color: gray;
        }

        .row{
            padding: 50px;
        }

        .panel-heading{
            background-color: #60d0df;
            border-color: #60d0df;
        }

        .panel-primary>.panel-heading{
            background-color: #60d0df;
            border-color: #60d0df;
        }

        .conteudoDiv{
            overflow: scroll;
            height: 500px;
        }
    </style>


    <div class="row" >

        <div class="col-xs-10 col-sm-6">
            <div class="panel panel-primary">
                @foreach ($curso1 as $curso1 )
                    <div class="panel-heading"><center><h3>{{$curso1 ->Nome}}</h3></center></div>
                    <div class="panel-body">


                        @if ($curso1->entidadeId == 1)
                            <br><b>Entidade:</b> PUCRS

                        @elseif ($curso1->entidadeId == 2)
                            <br><b>Entidade:</b> Senac

                        @elseif ($curso1->entidadeId == 3)
                            <br><b>Entidade:</b> Unisinos

                        @elseif ($curso1->entidadeId == 4)
                            <br><b>Entidade:</b> Senai
                        @endif

                        @if ($curso1->turnoId == 1)
                            <br><b>Turno:</b> Manha
                        @elseif ($curso1->turnoId == 2)
                            <br><b>Turno:</b> Tarde
                        @elseif ($curso1->turnoId == 3)
                            <br><b>Turno:</b> Noite
                        @elseif ($curso1->turnoId == 4)
                            <br><b>Turno:</b> Integral
                        @endif

                        <br> <b>Nota MEC:</b>  {{$curso1 ->notaMEC}}
                        <br> <b>Nota dos Alunos</b> {{$curso1 ->notaAlunos}}

                        <div style="float: right">
                            <a href="{{action('CursoController@cursoPaginaIndividual', $curso1->Id )}}"><br> <b>Ver mais</b></a>
                        </div>

                        @endforeach

                            <br><br><br>
                        <div class="conteudoDiv">
                            {!!html_entity_decode($curso1->Conteudo)!!}

                        </div>

                    </div>
            </div>
        </div>


        <div class="col-xs-10 col-sm-6">
            <div class="panel panel-primary">
                @foreach ($curso2 as $curso2 )
                    <div class="panel-heading"><center><h3>{{$curso2 ->Nome}}</h3></center></div>
                <div class="panel-body">


                    @if ($curso2->entidadeId == 1)
                        <br><b>Entidade:</b> PUCRS

                    @elseif ($curso2->entidadeId == 2)
                        <br><b>Entidade:</b> Senac

                    @elseif ($curso2->entidadeId == 3)
                        <br><b>Entidade:</b> Unisinos

                    @elseif ($curso2->entidadeId == 4)
                        <br><b>Entidade:</b> Senai
                    @endif

                    @if ($curso2->turnoId == 1)
                        <br><b>Turno:</b> Manha
                    @elseif ($curso2->turnoId == 2)
                        <br><b>Turno:</b> Tarde
                    @elseif ($curso2->turnoId == 3)
                        <br><b>Turno:</b> Noite
                    @elseif ($curso2->turnoId == 4)
                        <br><b>Turno:</b> Integral
                    @endif

                      <br> <b>Nota MEC:</b>  {{$curso2 ->notaMEC}}
                        <br> <b>Nota dos Alunos</b> {{$curso2 ->notaAlunos}}

                        <div style="float: right">
                            <a href="{{action('CursoController@cursoPaginaIndividual', $curso2->Id )}}"><br> <b>Ver mais</b></a>
                        </div>

                    @endforeach

                        <br><br><br>

                        <div class="conteudoDiv">

                        {!!html_entity_decode($curso2->Conteudo)!!}

                    </div>

                </div>
            </div>
        </div>

    </div>


@stop

