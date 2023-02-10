<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\BannerService;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Subgroup;
use App\Models\Banner;

#[Group('Banner')]
class BannerController extends Controller
{
    public function __construct(private BannerService $bannerService)
    {
    }

    #[Subgroup('Get Banner')]
    #[Endpoint('Get Banner By Type')]
    public function getBannerByType($bannerType)
    {
        return $this->bannerService->getBanner($bannerType);
    }

}
