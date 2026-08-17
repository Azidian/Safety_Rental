@extends('layouts.app')
@section('title', $viewData['title'])

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-warning">
        
        <div class="card-header bg-brand-black text-white text-center py-3">
            <h2 class="m-0 fw-bold" style="letter-spacing: 1px;">{{ $viewData['subtitle'] }}</h2>
        </div>

        <div class="card-body p-4">
            <div class="row">
                
                <div class="col-md-6">
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">Personal Information</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>ID:</strong> {{ $viewData['client']->getId() }}</li>
                        <li class="list-group-item"><strong>Role:</strong> {{ $viewData['client']->getRole() }}</li>
                        <li class="list-group-item"><strong>First Name:</strong> {{ $viewData['client']->getName() }}</li>
                        <li class="list-group-item"><strong>Last Name:</strong> {{ $viewData['client']->getLastName() }}</li>
                        <li class="list-group-item"><strong>Identification Number:</strong> {{ $viewData['client']->getIdentificationNumber() }}</li>
                        <li class="list-group-item"><strong>Date of Birth:</strong> {{ $viewData['client']->getBirthDate() }} <span class="badge bg-secondary">{{ $viewData['client']->getAge() }} years old</span></li>
                    </ul>
                </div>
                
                <div class="col-md-6">
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">Contact & Legal Info</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Email:</strong> {{ $viewData['client']->getEmail() }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $viewData['client']->getPhone() }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $viewData['client']->getAddress() }}</li>
                        <li class="list-group-item"><strong>License Number:</strong> {{ $viewData['client']->getLicenseNumber() }} <br> <small class="text-muted">Expires: {{ $viewData['client']->getLicenseExpirationDate() }}</small></li>
                        <li class="list-group-item"><strong>EPS:</strong> {{ $viewData['client']->getEPS() }}</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">Emergency Contact</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Name:</strong> {{ $viewData['client']->getNameEmergencyContact() }} {{ $viewData['client']->getLastNameEmergencyContact() }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $viewData['client']->getEmergencyContact() }}</li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('client.index') }}" class="btn btn-outline-dark fw-bold px-4">Back to List</a>
                
                <form action="{{ route('client.delete', ['id' => $viewData['client']->getId()]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this client? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fw-bold px-4 shadow-sm">
                        Delete Client
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection