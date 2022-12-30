<?php

namespace App\Models;

use App\Models\Bank;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ifsc extends Model
{
    use HasFactory;

    protected $table = 'ifscs';

     protected $fillable = [

        'bank',
        'ifsc',
        'micr',
        'branch',
        'state',
        'district',
        'city',
        'address',
        'std',
        'phone',
        'bank_id',

    ];

   protected function serializeDate(DateTimeInterface $date)
   {
       return $date->format('y-m-d H:i:s');

   }

   public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
