<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pincode extends Model
{
    use HasFactory;

    protected $table = 'pincodes';

     protected $fillable = [

        'pincode',
        'location',
        'state',
        'district',
        'city',
        'office',


    ];

   protected function serializeDate(DateTimeInterface $date)
   {
       return $date->format('y-m-d H:i:s');
   }
}
