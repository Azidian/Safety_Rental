@extends('layouts.reserve')

@section('title', 'Reserva | Inicio')

@section('content')
    <section class="panel">
        <h1>Gestión de reservas</h1>
        <p>Selecciona una acción para administrar las reservas.</p>
        <div class="actions">
            <a class="button" href="{{ route('reserves.create') }}">Crear reserva</a>
            <a class="button secondary" href="{{ route('reserves.index') }}">Listar reservas</a>
        </div>
    </section>
@endsection
