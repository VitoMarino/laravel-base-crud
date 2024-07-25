<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            //
            return [
                //
                'name' => 'required|min:3|max:600',
                'description' => 'required|min:3|max:600',
                'species'=> 'required|min:3|max:600',
                'image'=> 'required|url',
            ];
    }
    public function messages(){
        return [
            'name.min' => 'Il name ha bisogno di almeno 3 caratteri',
            'description.min'=> 'La descrizione ha bisogno di almeno 3 caratteri',
            'species.name'=> 'La species ha bisogno di almeno 3 caratteri',
            'image.url' => 'C\'è bisogno di un URL'
        ];
    }
}
