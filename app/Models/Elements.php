<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elements extends Model
{


    protected $fillable = [
        'name',
        'price',
        'order',
        'id',
        'new_layout',
        'simple',
        'category',
        'product_category',
        'desc',
        'sizeguide',
        'shortdesc',
        'readydesc',
        'instr',
        'pagetitle',
        'pagedesc',
        'pack_price',
        'product_cost',
        'active',
        'realphoto',
        'deliveryphoto',
        'productionphoto',
        'listingphoto',
        'rating',
        'rating_count',
        'label_text',
        'label_color',
        'label_text_color',
        'views_header_text',
        'production_reference',
        'production_operational_unit',
        'production_name',
        'production_catalog',
        'production_name_alt',
        'production_catalog_alt',
        'pricing',
        'min_amount',
        'price_meter',
        'quality_meter',
        'creation_date',
        'modify_date'
    ];


}
