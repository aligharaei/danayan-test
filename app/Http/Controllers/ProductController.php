<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(ProductRequest $productRequest)
    {
        $product = Product::create($productRequest->all());
        return response()->json([
            'data' => $product,
            'message' => 'محصول جدید ایجاد شد'
        ]);
    }

    public function getProducts($productId)
    {

        $product = Product::with('attributes')->find($productId);

        if ($product) {

            $productName = $product->name;
            $attributes = $product->attributes;

            $attributeDetails = [];
            $productData = [];

            foreach ($attributes as $attribute) {
                $color = $attribute->color;
                $capacity = $attribute->capacity;
                $price = $attribute->price;
                $stock = $attribute->stock;

                $attributeDetails[] = [
                    'color' => $color,
                    'capacity' => $capacity,
                    'price' => $price,
                    'stock' => $stock,
                ];
            }

            $productData[] = [
                'productName' => $productName,
                'attributes' => $attributeDetails
            ];

            return response()->json([
                'data' => $productData,
                'message' => null
            ]);

        } else {

            return response()->json([
                'data' => null,
                'message' => 'محصول مورد نظر یافت نشد!'
            ], 400);
        }
    }

    // you can develop this to add update and delete methods, but in this test the challenge is not based on this things
}
