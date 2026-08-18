@extends('layouts.reserve')

@section('title', 'Reserva | Detalle')

@section('content')
    <section class="panel">
        <h1>Detalle de la reserva #{{ $reserve->id }}</h1>

        <dl class="detail">
            <dt>ID</dt>
            <dd>{{ $reserve->id }}</dd>

            <dt>Código</dt>
            <dd>{{ $reserve->code }}</dd>

            <dt>Estado</dt>
            <dd>{{ $reserve->state }}</dd>

            <dt>Fecha de inicio</dt>
            <dd>{{ $reserve->startDate->format('Y-m-d') }}</dd>

            <dt>Fecha de finalización</dt>
            <dd>{{ $reserve->endDate->format('Y-m-d') }}</dd>

            <dt>Fecha de creación</dt>
            <dd>{{ $reserve->createAt->format('Y-m-d') }}</dd>
        </dl>

        <div class="actions">
            <a class="button secondary" href="{{ route('reserves.index') }}">Volver al listado</a>
            <form method="POST" action="{{ route('reserves.destroy', $reserve) }}" onsubmit="return confirm('¿Está seguro de que desea eliminar esta reserva?');">
                @csrf
                @method('DELETE')
                <button class="button danger" type="submit">Eliminar reserva</button>
            </form>
        </div>
    </section>
@endsection
