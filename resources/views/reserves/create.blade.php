@extends('layouts.reserve')

@section('title', 'Reserve | Crear')

@section('content')
    <section class="panel">
        <h1>Crear Reserve</h1>

        @if ($errors->any())
            <div class="error" role="alert">
                <p>Revisa los datos ingresados:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reserves.store') }}">
            @csrf

            <div class="field">
                <label for="code">Code</label>
                <input id="code" name="code" type="number" min="0" value="{{ old('code') }}" required>
            </div>

            <div class="field">
                <label for="state">State</label>
                <input id="state" name="state" type="text" value="{{ old('state') }}" required>
            </div>

            <div class="field">
                <label for="startDate">Start date</label>
                <input id="startDate" name="startDate" type="date" value="{{ old('startDate') }}" required>
            </div>

            <div class="field">
                <label for="endDate">End date</label>
                <input id="endDate" name="endDate" type="date" value="{{ old('endDate') }}" required>
            </div>

            <div class="field">
                <label for="createAt">Creation date</label>
                <input id="createAt" name="createAt" type="date" value="{{ old('createAt', now()->format('Y-m-d')) }}" required>
            </div>

            <div class="actions">
                <button class="button" type="submit">Guardar Reserve</button>
                <a class="button secondary" href="{{ route('reserves.index') }}">Cancelar</a>
            </div>
        </form>
    </section>
@endsection
