<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
      protected $fillable = [
            'source',
            'amount',
            'date'
        ];

        public function getDateAttribute($value)
        {
            return \Carbon\Carbon::parse($value)->format('Y-m-d');
        }
}
