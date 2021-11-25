<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Views extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'price_half',
        'price_full',
        'id',
        'name',
        'width',
        'height',
        'outline',
        'outline_area',
        'background',
        'mask',
        'overmask',
        'mask_colored',
        'mask_colored_outline',
        'promo',
        'offset_x',
        'offset_y',
        'creation_date',
        'modify_date',
    ];

}
