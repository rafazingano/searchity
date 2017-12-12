@extends('template.template')
@section('content')

    <style>
        #divGeneral{
            padding: 50px;
            margin-left: 100px;
            margin-right: 100px;
            text-align: center;
        }

        input[type=submit]{
            background-color: #51d1e1;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type=text]{
            background-color: #51d1e1;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            width: 500px;
            font-size: 18px;
        }


        a{
            text-decoration: none;
        }
    </style>

    <div class="panel panel-default" id="divGeneral">
        <div class="panel-body">
        {!! Form::open(['route' => 'compara', 'method' => 'post'])!!}

        @foreach ($cursos as $cursos)

            <div style="float: right; width: 40%">
                <br> {!! Form::radio('cursosID',$cursos->Id) !!}<?= $cursos->Nome ?>

                @if ($cursos->entidadeId == 1)
                     - Puc
                @elseif ($cursos->entidadeId == 2)
                    - Senac
                @elseif ($cursos->entidadeId == 3)
                    - Unisinos
                @elseif ($cursos->entidadeId == 4)
                    - Senai
                @endif

            </div>

            <div style="float: left; width: 40%">

                <br>{!! Form::radio('cursosID2',$cursos->Id) !!}<?= $cursos->Nome ?>
                @if ($cursos->entidadeId == 1)
                    - Puc
                @elseif ($cursos->entidadeId == 2)
                    - Senac
                @elseif ($cursos->entidadeId == 3)
                    - Unisinos
                @elseif ($cursos->entidadeId == 4)
                    - Senai
                @endif
            </div>

        @endforeach

        <br>  <br>  <br>
        {!! Form::submit('Comparar') !!}
        {!! Form::close() !!}
        </div>
    </div>
@stop









