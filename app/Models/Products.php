<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['title','author','name','date'];
    protected $guarded = [];
    protected $table = 'products';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
