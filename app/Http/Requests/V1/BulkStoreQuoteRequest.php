<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class BulkStoreQuoteRequest extends FormRequest
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
        return [
            '*.authorId' => ['required', 'integer'],
            '*.quote' => ['required'],
            //'categories.*.categoryId' => ['required'],


        ];
    }

    protected function prepareForValidation() {
        $data = [];
        foreach ($this->toArray() as $obj) {
            $obj['author_id'] = $obj['authorId'] ?? null;
            //$obj['category.category_id'] = $obj['category.categoryId'] ?? null;

            $data[] = $obj;
        }
 
        $this->merge($data);
    }
}
