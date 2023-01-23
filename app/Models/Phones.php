<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'phone',
        'company',
        'we',
        'vodafone',
        'etisalat',
        'orange',
        'status',
        'invoice_value',
        'created_at',
        'updated_at',
     ];
}
