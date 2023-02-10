<?php

namespace App\Services;

use App\Models\Banner;

class BannerService
{
    public function getBanner($type)
    {
        return Banner::where('type', $type)->get();
    }
}
