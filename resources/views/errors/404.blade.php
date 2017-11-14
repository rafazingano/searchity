@extends('layout')

@section('content')
<div class="col-md-12">    
    <h1>Página não encontrada!!!</h1>
    <hr/>
    <p>
        <a href="{{ route('quiz') }}" class="btn btn-lg btn-primary">Começar o teste</a>
        <a href="{{ route('home') }}" class="btn btn-lg btn-primary">Home</a>
    </p> 
</div>
@endsection