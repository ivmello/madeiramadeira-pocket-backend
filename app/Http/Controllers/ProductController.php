<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use App\Http\Resources\ListProductResource;
use App\Http\Resources\StoreProductResource;
use App\Http\Resources\UpdateProductResource;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::orderBy('id', 'desc')->get();

        return (new ListProductResource($products))
            ->response()
            ->setStatusCode(200);
    }

    public function store(StoreProductRequest $request, ProductService $service) {
        $product = $service->storeNewProduct(
            $request->name,
            $request->description,
            $request->price,
            $request->image,
        );
        return (new StoreProductResource($product))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateProductRequest $request, Product $product, ProductService $service) {
        $productUpdated = $service->updateProduct(
            $product,
            $request->name,
            $request->description,
            $request->price,
        );

        return (new UpdateProductResource($product))
            ->response()
            ->setStatusCode(200);
    }

    public function destroy(Request $request, Product $product, ProductService $service) {
        $service->deleteProduct(
            $product,
        );

        return response()->json([], 200);
    }
}
