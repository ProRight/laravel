<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sku;
use Illuminate\Http\Request;

class SkusController extends Controller
{
    public function getSkus(){

        //$skus = Sku::avaliable()->get()->toJson();

        return Sku::with('product')->avaliable()->get()->append('product_name');

    }
}
