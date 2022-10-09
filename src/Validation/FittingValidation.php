<?php

namespace Teddy9110\Seat\WHTools\Validation;

use Illuminate\Foundation\Http\FormRequest;

class FittingValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fitSelection' => 'nullable',
            'eftfitting' => 'required'
        ];
    }
}
