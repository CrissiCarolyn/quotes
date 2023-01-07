<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;
    
    //protected $table = 'quotes';
    //protected $primaryKey = 'quote_id'; 
 //   protected $fillable = [
 //       'quote',
 //       'quoteYear'
 //   ];
    protected $fillable = [
        'author_id',
        'quote'
    ];
    public function author() {
        return $this->hasOne(
            Author::class, 'id', 'author_id'
    );
    }
 
    
    //$quotes = Quote::has('categories', '[gt]', 3)->get();

    public function categories() {

       return $this->belongsToMany(
        Category::class,
        'category_quote',
        'quote_id',
        'category_id');
    }
 
    
}
