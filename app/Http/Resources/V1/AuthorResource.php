<?php

namespace App\Http\Resources\V1;

use App\Http\Resources\V1\QuoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)
    {
         return [
            //'authorId' => $this->id,
            'authorName' => $this->author_name
        ];
    }
}
