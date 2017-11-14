@extends('layout')

@section('content')
<div class="col-md-4">
    <h1>Pergunta {{ $etapa }}</h1>
    <hr/>
</div>
<div class="col-md-8 ml-auto">
    <form method="post" action="{{ route('respondendo', $etapa) }}">
        {{ csrf_field() }}
        <ul class="list-group">
            <li class="list-group-item active">{{ $pergunta['p'] }}:</li>
            @foreach($pergunta['r'] as  $k => $v)
            <li class="list-group-item text-primary">
                <input type="radio" name="resposta" value="{{ $k }}" class="float-left"> 
                <span class="float-right">{{ $v }}</span>
            </li>
            @endforeach
        </ul>
        <hr/>
        <input type="submit" value="Responder" class="btn btn-primary float-right">
    </form>
</div>
@endsection