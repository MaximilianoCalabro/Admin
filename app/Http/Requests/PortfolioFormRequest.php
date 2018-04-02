<?php

namespace admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioFormRequest extends FormRequest
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
            'separadores'=>'required|max:45',
            'filtro1'=>'required|max:45',
            'filtro2'=>'max:45',
            'filtro3'=>'max:45',
            'imagen_portfolio'=>'mimes:jpeg,bmp,png',
            'subtitulo'=>'required|max:45',
            'pagina'=>'required|max:75'
        ];
    }
}
