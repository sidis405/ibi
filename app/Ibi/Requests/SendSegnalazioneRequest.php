<?php

namespace Ibi\Requests;

use App\Http\Requests\Request;

class SendSegnalazioneRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'cognome' => 'required|min:3',
            // 'dob' => 'required|date',
            'messaggio' => 'required|min:10',
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
}
