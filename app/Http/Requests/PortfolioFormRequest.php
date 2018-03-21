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
            'titulo'=>'required|max:45',
            'separadores'=>'required|max:45',
            'imagen_portfolio'=>'required|max:75',
            'subtitulo'=>'required|max:45',
            'pagina'=>'required|max:75'
        ];
    }
}
