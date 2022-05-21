<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'value',
        'type',
        'currency_id',
        'only_once',
        'expired_at',
        'description',
        ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function fg(){
        return $this->expired_at->lte();
    }
}
