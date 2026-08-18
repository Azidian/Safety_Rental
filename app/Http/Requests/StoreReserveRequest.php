<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReserveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'integer'],
            'state' => ['required', 'string', 'max:255'],
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date', 'after_or_equal:startDate'],
            'createAt' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'code.required' => 'El código es obligatorio.',
            'code.integer' => 'El código debe ser un número entero.',
            'state.required' => 'El estado es obligatorio.',
            'state.string' => 'El estado debe ser texto.',
            'state.max' => 'El estado no puede tener más de 255 caracteres.',
            'startDate.required' => 'La fecha de inicio es obligatoria.',
            'startDate.date' => 'La fecha de inicio no es válida.',
            'endDate.required' => 'La fecha de finalización es obligatoria.',
            'endDate.date' => 'La fecha de finalización no es válida.',
            'endDate.after_or_equal' => 'La fecha de finalización no puede ser anterior a la fecha de inicio.',
            'createAt.required' => 'La fecha de creación es obligatoria.',
            'createAt.date' => 'La fecha de creación no es válida.',
        ];
    }
}
