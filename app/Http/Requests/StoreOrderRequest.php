<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'pickup_date' => 'required|date',
            'details' => 'required|min:10',
            'weight' => 'required|numeric',
            'advance_payment_amount' => 'required',
            'notes' => '',
            'restart_payment_amount' => ''
        ];
    }

    protected function defaults()
    {
        return [
            'rest_payment_amount'   => '0',
            'notes'  => '0',
        ];
    }
}
