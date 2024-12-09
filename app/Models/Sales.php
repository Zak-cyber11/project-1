<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
   protected $fillable = [
         'product',
         'quantity',
         'price',
         'date'
     ];

     public function getDateAttribute($value)
     {
         return \Carbon\Carbon::parse($value)->format('Y-m-d');
     }
}
