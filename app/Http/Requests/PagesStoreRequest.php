<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesStoreRequest extends FormRequest
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
        $pageId = isset($this->page->id) ? $this->page->id : $this->id;
        return [
            'name' => 'required|max:255',
            'alias' => 'required|max:255|unique:pages,alias,' . $pageId,
            'text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно к заполнению',
            'unique' => 'Поле :attribute должно быть уникальным',
        ];
    }
}
