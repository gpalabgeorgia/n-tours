<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index() {
        $page_name = 'Index';
        $banners = Banner::get()->toArray();
        return view('front.index')->with(compact('page_name', 'banners'));
    }
}
