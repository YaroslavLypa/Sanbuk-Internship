<?php

namespace App\Services;

use App\Http\Requests\Product\ProductRequest;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;

class ProductService
{
    private StripeClient $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.stripe_secret'));
    }

    public function getProducts(): array
    {
        $products = $this->stripe->products->all();
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

    /**
     * @throws ApiErrorException
     */
    public function buyProduct(ProductRequest $request): bool
    {
        $price = $this->stripe->prices->all(['product' => $request->product_id])->data[0]->unit_amount;

        $this->stripe->charges->create(
            [
                'amount' => $price,
                'currency' => 'usd',
                'customer' => auth()->user()['stripe_id'],
            ]
        );
        return true;
    }
}
