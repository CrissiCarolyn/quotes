<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class QuotesFilter extends ApiFilter {
    protected $allowedParms = [
        'Id' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        //'authorId' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        //'quote' => ['eq'],
        //'quoteYear' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        //'categoryId' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        //'categoryName' => ['eq']
    ];


    //$table->foreignId('author_id')->references('author_id')->on('authors');
 

    protected $columnMap = [
        'quoteId' => 'id',
        //'authorId' => 'author_id',
        //'quote' => 'quote',
        //'quoteYear' => 'quote_year',
        //'categoryId' => 'category_id',
        //'categoryName' => 'category_name',
        //'authorName' => 'author_name'
    ];


    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}


