<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // "use" dentro de la clase es un insert a trait
    use HasFactory;
    
    protected $table = 'product';
    public $timestamps = false;
    
    protected $fillable = ['name', 'price'];
}
