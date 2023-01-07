<?php

namespace App\Models;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    //protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name'
    ];

    public function quotes() {

        return $this->belongsToMany(
        Quote::class,
        'category_quote',
        'category_id',
        'quote_id');

    }
}
