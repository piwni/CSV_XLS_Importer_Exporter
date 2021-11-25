<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elements_Views_Match extends Model
{
    protected $fillable = [
        'views_id',
        'elements_id',
        'id',
        'creation_date',
        'modify_date',
    ];
}
