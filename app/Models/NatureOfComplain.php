<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureOfComplain extends Model
{
    use HasFactory;

    protected $fillable = [
        'cases_id',
        'description'
    ];
}
