@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
    <h1>Crear Clientes</h1>
    <form action="{{ route('client.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del Cliente">
            <p class="form-text">Escriba nombre del Cliente</p>
            @error('name')
            <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="due" class="form-label">Saldo</label>
            <input type="number" name="due" class="form-control" placeholder="Saldo del Cliente" step="0.001">
            <p class="form-text">Escriba Saldo del Cliente</p>
            @error('due')
            <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="comments" class="form-label">Comentarios</label>
            <textarea name="comments" cols="30" rows="4" class="form-control"></textarea>
            <p class="form-text">Escriba un Comentario</p>
        </div>
        <button type="submit"> Guardar Cliente</button>
    </form>
</div>
@endsection