@extends('layouts.reserve')

@section('title', 'Reservas | Listado')

@section('content')
    <section class="panel">
        <h1>Reservas</h1>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <div class="actions">
            <a class="button" href="{{ route('reserves.create') }}">Crear reserva</a>
        </div>

        @if ($reserves->isEmpty())
            <p>No hay reservas registradas.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reserves as $reserve)
                        <tr>
                            <td><a href="{{ route('reserves.show', $reserve) }}">{{ $reserve->id }}</a></td>
                            <td>{{ $reserve->code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection
