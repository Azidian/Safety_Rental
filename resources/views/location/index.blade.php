@extends('layouts.app')

@section('title', 'Locations')

@section('content')
    <div class="container">
        <h1>Locations</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($locations->isEmpty())
            <p>No locations found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>
                                <a href="{{ route('location.show', $location->id) }}">
                                    {{ $location->id }}
                                </a>
                            </td>
                            <td>
                                {{ $location->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection