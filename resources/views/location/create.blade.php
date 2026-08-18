@extends('layouts.app')

@section('title', 'Create Location')

@section('content')
    <div class="container">
        <h1>Create Location</h1>

        <form action="{{ route('location.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    required
                >
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input
                    type="text"
                    id="address"
                    name="address"
                    class="form-control"
                    value="{{ old('address') }}"
                    required
                >
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="headquarters" class="form-label">Headquarters</label>
                <input
                    type="text"
                    id="headquarters"
                    name="headquarters"
                    class="form-control"
                    value="{{ old('headquarters') }}"
                    required
                >
                @error('headquarters')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    class="form-control"
                    value="{{ old('phone') }}"
                    required
                >
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input
                    type="text"
                    id="city"
                    name="city"
                    class="form-control"
                    value="{{ old('city') }}"
                    required
                >
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Create Location
            </button>
        </form>
    </div>
@endsection