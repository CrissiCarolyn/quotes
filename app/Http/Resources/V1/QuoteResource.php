<?php

namespace App\Http\Resources\V1;
use App\Models\Quote;
use App\Models\Author;
use App\Filters\V1\AuthorsFilter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = null;

    public function toArray($request)
    { 

        return [
            //'quoteId' => $this->id, 
            'quote' => $this->quote, 
            'author' => new AuthorResource($this->author)
            //'categories' => CategoryResource::collection($this->categories)
        ];
    }
}
