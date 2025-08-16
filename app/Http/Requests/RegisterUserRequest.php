<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Auth talab qilinmasa true
        return true;
    }

    public function rules(): array
    {

        return [
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required',  Rules\Password::defaults()],
            'full_name'      => 'required|string|max:255',
            'degree'         => 'nullable|string|max:255',
            'organization'   => 'required|string|max:255',
            'city_country'   => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:50',
            'participation'  => 'required|in:onsite,online',
            'section'        => 'nullable|string|max:255',
            'presentation'   => 'nullable|string|max:255',
            'hotel'          => 'nullable|boolean',
            'arrival_date'   => 'nullable|date',
            'departure_date' => 'nullable|date|after_or_equal:arrival_date',
            'tour'           => 'nullable|boolean',
            'tezis'          => 'required|file|mimes:pdf,doc,docx|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required'      => __('messages.RegisterValidationFullName'),
            'organization.required'   => __('messages.RegisterValidationOrganization'),
            'email.required'          => __('messages.RegisterValidationEmailRequired'),
            'email.email'             => __('messages.RegisterValidationEmailEmail'),
            'email.unique'            => __('messages.RegisterValidationEmailUnique'),
            'participation.required'  => __('messages.RegisterValidationParticipationRequired'),
            'participation.in'        => __('messages.RegisterValidationParticipationIn'),
            'tezis.file'              => __('messages.RegisterValidationTezisFile'),
            'tezis.mimes'             => __('messages.RegisterValidationTezisMimes'),
            'tezis.max'               => __('messages.RegisterValidationTezisMax'),
        ];
    }
}
