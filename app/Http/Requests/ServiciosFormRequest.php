<?php

namespace admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiciosFormRequest extends FormRequest
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
            'texto'=>'required|max:500',
            'subtitulo'=>'required|max:45',
            'subtexto'=>'required|max:500'
        ];
    }
}
