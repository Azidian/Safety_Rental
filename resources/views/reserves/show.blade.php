@extends('layouts.reserve')

@section('title', 'Reserve | Detalle')

@section('content')
    <section class="panel">
        <h1>Detalle de Reserve #{{ $reserve->id }}</h1>

        <dl class="detail">
            <dt>ID</dt>
            <dd>{{ $reserve->id }}</dd>

            <dt>Code</dt>
            <dd>{{ $reserve->code }}</dd>

            <dt>State</dt>
            <dd>{{ $reserve->state }}</dd>

            <dt>Start date</dt>
            <dd>{{ $reserve->startDate->format('Y-m-d') }}</dd>

            <dt>End date</dt>
            <dd>{{ $reserve->endDate->format('Y-m-d') }}</dd>

            <dt>Creation date</dt>
            <dd>{{ $reserve->createAt->format('Y-m-d') }}</dd>
        </dl>

        <div class="actions">
            <a class="button secondary" href="{{ route('reserves.index') }}">Volver al listado</a>
            <form method="POST" action="{{ route('reserves.destroy', $reserve) }}">
                @csrf
                @method('DELETE')
                <button class="button danger" type="submit">Eliminar Reserve</button>
            </form>
        </div>
    </section>
@endsection
