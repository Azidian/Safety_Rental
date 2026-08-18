@extends('layouts.reserve')

@section('title', 'Reserve | Inicio')

@section('content')
    <section class="panel">
        <h1>Gestión de Reserves</h1>
        <p>Selecciona una acción para trabajar con la clase Reserve.</p>
        <div class="actions">
            <a class="button" href="{{ route('reserves.create') }}">Crear Reserve</a>
            <a class="button secondary" href="{{ route('reserves.index') }}">Listar Reserves</a>
        </div>
    </section>
@endsection
