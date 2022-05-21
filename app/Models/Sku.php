<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;

    // protected $table = 'skus';
    protected $fillable = ['product_id', 'count', 'price'];
    protected $visible = ['id','count','price','product_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function propertyOptions()
    {
        return $this->belongsToMany(PropertyOption::class, 'sku_property_options')->withTimestamps();
    }

    public function scopeAvaliable($query)
    {
        return $query->where('count', '>', 0);
    }

    public function getProductNameAttribute()
    {
        return $this->product->name;
    }
}
