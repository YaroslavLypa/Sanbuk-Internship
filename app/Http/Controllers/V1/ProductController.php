<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\Product\ProductRequest;
use App\Services\ProductService;
use Knuckles\Scribe\Attributes\Authenticated;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Header;

#[Group('Stripe Products')]
class ProductController
{
    public function __construct(public ProductService $productService)
    {
    }

    #[Endpoint('Get active products')]
    public function getProducts()
    {
        return $this->productService->getProducts();
    }

    #[Endpoint('Buy product')]
    #[Authenticated]
    #[Header('Authorization', 'Bearer ')]
    public function buyProduct(ProductRequest $request)
    {
        return $this->productService->buyProduct($request);
    }
}
