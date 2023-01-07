<?php

namespace App\Models;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    //protected $table = 'authors';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'author_name'
    ];

    public function quotes() {
        return $this->hasMany(
            Quote::class, 'quote_id'
        );
    }

    
}
