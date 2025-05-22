<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // hrs truee!
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'jabatan' => 'required|string|max:225',
            'gaji_pokok' => 'required|numeric'


        ];
    }

    // custome massage
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karkter',
            'jabatan.required' => 'jabatan wajib diisi',
            'gaji_pokok.required' => 'Gaji pokok wajib diisi',
            
        ];
    }
}
