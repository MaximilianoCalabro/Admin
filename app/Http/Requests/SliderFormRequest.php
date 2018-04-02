<?php

namespace admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderFormRequest extends FormRequest
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
            'imagen_slider'=>'mimes:jpeg,bmp,png',
            'titulo'=>'required|max:45',
            'texto'=>'max:500',
        ];
    }
}
