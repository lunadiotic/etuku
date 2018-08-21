<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCommodity extends Model
{
    protected $fillable = [
        'slug', 'title'
    ];

    public function comCat()
    {
        return $this->hasMany(CommodityCategories::class);
    }
}
