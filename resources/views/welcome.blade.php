@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
    <h1>Hola mundo!</h1>
    <a href="{{ route('client.index',['id'=>1]) }}" class="btn btn-primary">Clientes</a>
</div>
@endsection