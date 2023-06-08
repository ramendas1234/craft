<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{

    //protected $stopOnFirstFailure = true;
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'min:5'],
            'surname' => ['required', 'min:5'],
            'email' => ['required'],
            'phone' => ['required'],
            'pin' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'company' => ['required'],
            'profession' => ['required'],
            'experience' => ['required'],
            'salary' => ['required'],
            'date_of_joining' => ['required'],
            'is_notice' => ['required'],
            'is_remote' => ['required'],
            'gender' => ['required'],
            'shift' => ['required'],
            'street' => '',
        ];
    }
}
