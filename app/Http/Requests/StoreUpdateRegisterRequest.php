<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRegisterRequest extends FormRequest
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
        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:255|unique:register,name,{$id},id",
            'food' => "required|min:3|100",
            'recreation' => "required|min:3|max:100",
            'financing' => "required|min:3",
        ];
    }

    public function mensagens()
    {
        return [
            'name.required' => 'O nome é obrigatório!!!',
            'food.required' => 'Informe a alimentação',
        ];
    }
}
