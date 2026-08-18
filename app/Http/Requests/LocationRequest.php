<?php

namespace App\Http\Requests;

use App\Models\Location;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class LocationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'headquarters' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:255'],
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $exists = Location::where('address', $this->address)
                    ->where('name', $this->name)
                    ->where('headquarters', $this->headquarters)
                    ->where('phone', $this->phone)
                    ->where('city', $this->city)
                    ->exists();

                if ($exists) {
                    $validator->errors()->add(
                        'name',
                        'This location already exists.'
                    );
                }
            },
        ];
    }
}
