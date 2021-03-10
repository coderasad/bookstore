<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_img',
        'status'
    ];
    
    public function books() {
        return $this->hasMany(book::class,'category_id')->where('status',1);
    }
}
