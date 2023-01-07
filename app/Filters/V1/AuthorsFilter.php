<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class AuthorsFilter extends ApiFilter {
    protected $allowedParms = [
        //'id' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'authorName' => ['eq']
    ];

    protected $columnMap = [
        //'authorId' => 'id',
        'authorName' => 'author_name'
    ];


    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}


