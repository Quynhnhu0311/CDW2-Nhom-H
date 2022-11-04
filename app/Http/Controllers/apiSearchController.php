<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class apiSearchController extends Controller
{
    //
    public function ajaxSearch()
    {
        $data = Product::search()->get();
        return $data;
    }
}
