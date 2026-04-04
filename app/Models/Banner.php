<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    public static function getBanners() {
        // Get Banners
        $getBanners = Banner::where('status', 1)->limit(1)->get()->toArray();
        return $getBanners;
    }
}
