<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CategoriesFilter extends ApiFilter {
    protected $allowedParms = [
        'id' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'categoryName' => ['eq']
    ];

    protected $columnMap = [
        'categoryId' => 'category_id',
        'categoryName' => 'category_name'
    ];


    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}


