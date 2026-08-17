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
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">{{ __('messages.personal_info') }}</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>ID:</strong> {{ $viewData['client']->getId() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.role') }}</strong> {{ $viewData['client']->getRole() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.first_name') }}:</strong> {{ $viewData['client']->getName() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.last_name') }}:</strong> {{ $viewData['client']->getLastName() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.id_number') }}</strong> {{ $viewData['client']->getIdentificationNumber() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.dob') }}</strong> {{ $viewData['client']->getBirthDate() }} <span class="badge bg-secondary">{{ $viewData['client']->getAge() }} {{ __('messages.years_old') }}</span></li>
                    </ul>
                </div>
                
                <div class="col-md-6">
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">{{ __('messages.contact_legal') }}</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>{{ __('messages.email') }}:</strong> {{ $viewData['client']->getEmail() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.phone') }}:</strong> {{ $viewData['client']->getPhone() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.address') }}:</strong> {{ $viewData['client']->getAddress() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.license_number') }}</strong> {{ $viewData['client']->getLicenseNumber() }} <br> <small class="text-muted">{{ __('messages.expires') }} {{ $viewData['client']->getLicenseExpirationDate() }}</small></li>
                        <li class="list-group-item"><strong>{{ __('messages.eps') }}</strong> {{ $viewData['client']->getEPS() }}</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <h4 class="text-brand-orange fw-bold border-bottom border-warning pb-2">{{ __('messages.emergency_contact') }}</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>{{ __('messages.name_emergency') }}:</strong> {{ $viewData['client']->getNameEmergencyContact() }} {{ $viewData['client']->getLastNameEmergencyContact() }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.phone') }}:</strong> {{ $viewData['client']->getEmergencyContact() }}</li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('client.index') }}" class="btn btn-outline-dark fw-bold px-4">{{ __('messages.back_to_list') }}</a>
                
                <form action="{{ route('client.delete', ['id' => $viewData['client']->getId()]) }}" method="POST" onsubmit="return confirm('{{ __('messages.delete_confirm') }}');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fw-bold px-4 shadow-sm">
                        {{ __('messages.delete_client') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection