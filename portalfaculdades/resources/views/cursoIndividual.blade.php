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
            height: 100px;
        }

        a{
            text-decoration: none;
        }
    </style>


    <div class="panel panel-default" id="divGeneral">

        @foreach ($curso as $c)

        <h3>    {{$c->Nome}}</h3>

        <br>

         <p>   {{$c->Conteudo}} </p>

        @endforeach


            @foreach ($avaliacaoCurso as $a)

                {{$a->Conteudo}}

            @endforeach


    </div>
@stop