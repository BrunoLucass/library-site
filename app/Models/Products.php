<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['title','author','name','date'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';
}
