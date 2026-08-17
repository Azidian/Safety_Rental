@extends('layouts.app') 
@section('title', $viewData['title']) 

@section('content') 
<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success text-center fw-bold shadow-sm mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="subtitleClient">{{ $viewData['subtitle'] }}</h2>
        <a href="{{ route('client.create') }}" class="btn btn-outline-dark fw-bold">{{ __('messages.register_new_btn') }}</a>
    </div>

    <div class="row"> 
        @foreach ($viewData['clients'] as $client) 
        <div class="col-md-4 col-lg-3 mb-4"> 
            <div class="card shadow-sm border-warning h-100"> 
                
                <div class="card-header bg-brand-black text-white text-center py-2">
                    <span class="fw-bold" style="letter-spacing: 1px;">{{ __('messages.client_id') }} {{ $client->getId() }}</span>
                </div>

                <div class="card-body text-center d-flex flex-column justify-content-center"> 
                    
                    <h4 class="card-title fw-bold text-dark mt-2">
                        {{ $client->getName() }} {{ $client->getLastName() }}
                    </h4>
                    
                    <hr class="text-warning">

                    <a href="{{ route('client.show', ['id'=> $client->getId()]) }}" class="btn btn-nav-viewDetails-saveContact text-orange fw-bold mt-auto">
                        {{ __('messages.view_details') }}
                    </a> 

                </div> 
            </div> 
        </div> 
        @endforeach 
    </div> 

</div>
@endsection