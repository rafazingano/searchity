@extends('layout')

@section('content')
<div class="col-md-12">
    <h1>Hoje, que série melhor representa você?</h1>
    <p>Com base em suas respostas, vamos definir qual série melhor representa você, simplesmente respondendo o questionário.</p>
    <p>
        <a href="{{ route('quiz') }}" class="btn btn-lg btn-primary">Começar Agora</a>
    </p>
</div>
@endsection