<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'field'=>['required','string'],
            'password'=>['required']
        ];
    }

    /**
     * @throws ValidationException
     */
    public function authenticate()
    {
        $user = Admin::where('email', $this->field)
            ->orWhere('phone',$this->field)
            ->first();

        if (!$user || !Hash::check($this->password,$user->password )){
            throw ValidationException::withMessages([
                'field'=>'The data does not match with what we have in our database'
            ]);
        }
        Auth::guard('admin')->login($user);
    }
}
