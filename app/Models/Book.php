<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'author_name',
        'sort_des',
        'main_book',
        'book_img',
        'category_id',
        'user_id',
        'published_date',
        'paid_free',
        'status'
    ];
    
    public function category() {
        return $this->belongsTo('App\Models\Category','category_id')->where('status',1);
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User','user_id')->where('status',1);
    }
}
