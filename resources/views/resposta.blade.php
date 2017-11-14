@extends('layout')

@section('content')
<div class="col-md-12">
    <h1>Essa é a série que melhor te representa</h1>
    <hr/>
    <h5>{{ $resposta }}</h5>
    <hr/>
    <p>
        <a href="{{ route('quiz') }}" class="btn btn-lg btn-primary">Novo teste</a>
        <a href="{{ route('home') }}" class="btn btn-lg btn-primary">Home</a>
    </p>    
</div>
@endsection