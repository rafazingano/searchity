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

</style>


<div class="panel panel-default" id="divGeneral">

    {!! Form::open(['route' => 'findCurso', 'method' => 'post'])!!}

    <h2>Encontre a sua faculdade dos sonhos:</h2>

    {!! Form::text('findCurso', @$findCurso) !!}
    {!! Form::submit('Buscar') !!}
    {!! Form::close() !!}

    </div>

@stop