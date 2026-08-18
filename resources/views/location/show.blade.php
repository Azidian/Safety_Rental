@extends('layouts.app')

@section('title', 'Location Details')

@section('content')
    <div class="container">
        <h1>Location Details</h1>

        <p><strong>ID:</strong> {{ $location->id }}</p>
        <p><strong>Name:</strong> {{ $location->name }}</p>
        <p><strong>Address:</strong> {{ $location->address }}</p>
        <p><strong>Headquarters:</strong> {{ $location->headquarters }}</p>
        <p><strong>Phone:</strong> {{ $location->phone }}</p>
        <p><strong>City:</strong> {{ $location->city }}</p>

        <a href="{{ route('location.index') }}">
            Back to Locations
        </a>

        <br><br>

        <form
            action="{{ route('location.destroy', $location->id) }}"
            method="POST"
        >
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete Location
            </button>
        </form>
    </div>
@endsection