@extends('layouts.app')

<!-- Static texts placed directly in the view -->
@section('title', 'Products - Online Store')
@section('subtitle', 'List of products')

@section('content')
<div class="row">
    <!-- Loop through the dynamic products passed from the controller -->
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
            <div class="card-body text-center">
                <!-- Using the route helper to generate the dynamic URL -->
                <a href="{{ route('product.show', ['id' => $product['id']]) }}" class="btn bg-primary text-white">
                    {{ $product["name"] }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection