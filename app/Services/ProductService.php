<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function storeNewProduct(
        string $name,
        string $description,
        float $price
    ): Product {
        $product = new Product;
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

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
