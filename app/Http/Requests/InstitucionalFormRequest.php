<?php

namespace admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionalFormRequest extends FormRequest
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
            'titulo'=>'required|max:45',
            'prezi'=>'required|max:500'
        ];
    }
}
