<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttributeRequest;
use App\Models\Product;

class AttributeController extends Controller
{
    public function addAttribute(AttributeRequest $attributeeRequest, $productId)
    {

        $product = Product::find($productId);

        if ($product) {
            $product->attributes()->create($attributeeRequest->all());
            return response()->json([
                'data' => $product,
                'message' => 'ویژگی با موفقیت ایجاد شد'
            ]);

        } else {
            return response()->json([
                'data' => null,
                'message' => 'محصول موردنظر یافت نشد'
            ], 400);
        }
    }
}
