<?php

namespace App\Services;

use App\Http\Requests\Product\ProductRequest;
use Stripe\StripeClient;

class ProductService
{
    private StripeClient $stripeClient;

    public function __construct()
    {
        $this->stripeClient = new StripeClient(config('stripe.stripe_secret'));
    }

    public function getProducts(): array
    {
        $products = $this->stripeClient->products->all();
        $res = [];
        foreach ($products as $product) {
            if ($product->active === true) {
                $res[] =
                    [
                        'id' => $product->id,
                        'status' => $product->active,
                        'name' => $product->name,
                        'price' => $product->default_price,
                        'description' => $product->description,
                    ];
            }
        }
        return $res;
    }

    public function buyProduct(ProductRequest $request): bool
    {
        $price = $this->stripeClient->prices->all(['product' => $request->product_id])->data[0]->unit_amount;

        $this->stripeClient->charges->create(
            [
                'amount' => $price,
                'currency' => 'usd',
                'customer' => auth()->user()['stripe_id'],
            ]
        );
        return true;
    }
}
