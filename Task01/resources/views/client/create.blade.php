@extends('layouts.app')
@section('title', __('messages.register_title'))

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow-sm w-75 border-warning">
        
        <div class="card-header bg-brand-black text-white text-center py-3">
            <h2 class="m-0 fw-bold" style="letter-spacing: 1px;">{{ __('messages.register_new_client') }}</h2>
        </div>

        <div class="card-body p-5">
            <form method="POST" action="{{ route('client.save') }}">
                
                @csrf
                <input type="hidden" name="role" value="Customer">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label fw-bold">{{ __('messages.first_name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label fw-bold">{{ __('messages.last_name') }}</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label fw-bold">{{ __('messages.dob') }}</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label fw-bold">{{ __('messages.address') }}</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-bold">{{ __('messages.email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label fw-bold">{{ __('messages.phone') }}</label>
                        <input type="text" class="form-control" id="phone" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="identificationNumber" class="form-label fw-bold">{{ __('messages.id_number') }}</label>
                        <input type="text" class="form-control" id="identificationNumber" name="identificationNumber" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="licenseNumber" class="form-label fw-bold">{{ __('messages.license_number') }}</label>
                        <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="12" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="EPS" class="form-label fw-bold">{{ __('messages.eps') }}</label>
                        <input type="text" class="form-control" id="EPS" name="EPS" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="emergencyContact" class="form-label fw-bold">{{ __('messages.num_emergency') }}</label>
                        <input type="text" class="form-control" id="emergencyContact" name="emergencyContact" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nameEmergencyContact" class="form-label fw-bold">{{ __('messages.name_emergency') }}</label>
                        <input type="text" class="form-control" id="nameEmergencyContact" name="nameEmergencyContact" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastNameEmergencyContact" class="form-label fw-bold">{{ __('messages.last_name_emergency') }}</label>
                        <input type="text" class="form-control" id="lastNameEmergencyContact" name="lastNameEmergencyContact" required>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-nav-viewDetails-saveContact text-orange fs-5 py-2">
                        {{ __('messages.save_client') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection