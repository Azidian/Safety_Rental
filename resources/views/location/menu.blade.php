@extends('layouts.app')

@section('title', 'Locations')

@section('content')
    <div class="text-center">
        <h1>Location Management</h1>

        <a href="{{ route('location.create') }}">Create Location</a>
        <br><br>
        <a href="{{ route('location.index') }}">List Locations</a>
    </div>
@endsection