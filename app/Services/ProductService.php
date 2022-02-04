<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function storeNewProduct(
        string $name,
        string $description,
        float $price,
        $image
    ): Product {
        $product = new Product;
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        // if (!empty($image)) {
        //     $imageName = time().'.'.$image->extension();
        //     $path = Storage::disk('s3')->put('images', $image);
        //     $path = Storage::disk('s3')->url($path);

        //     $product->image = $imageName;
        // }

        if (!empty($image)) {
            $imageName = time().'.'.$image->extension();
            $path = $image->store('images/'.$imageName, 's3');
            $product->image = $imageName;
        }

        $product->save();

        return $product;
    }

    public function updateProduct(
        Product $product,
        string $name,
        string $description,
        float $price
    ): Product {
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        $product->save();

        return $product;
    }

    public function deleteProduct(
        Product $product
    ): void {
        $product->delete();
    }
}
