<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'authorId' => ['required'],
                'quote' => ['required'],
                'categoryId' => ['required']

            ];
        } else {
            return [
                'authorId' => ['sometimes', 'required'],
                'quote' => ['sometimes', 'required'],
                'categoryId' => ['sometimes', 'required'],

             ];
        }
     
    }

    protected function prepareForValidation() {
        if ($this->authorId) {
            $this->merge([
                'author_id' => $this->authorId,
                'category_id' => $this->categoryId,
             ]);
        }
       
    }
}