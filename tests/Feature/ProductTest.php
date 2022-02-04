<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_list()
    {
        $response = $this->get('/api/products');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $product = [
            'name' => 'teste',
            'description' => 'teste',
            'price' => 123.4,
        ];
        $response = $this->postJson('/api/products', $product);
        $response
            ->assertStatus(201)
            ->assertJson([
                'success' => true,
            ]);
    }

    public function test_update()
    {
        $product = [
            'name' => 'teste updated',
            'description' => 'teste',
            'price' => 123.4,
        ];
        $response = $this->putJson("/api/products/1", $product);
        $response
            ->assertStatus(200)
            ->assertJson([
                'success' => true,
            ]);
    }

    public function test_delete()
    {
        $product = new Product;
        $product->name="teste";
        $product->description="teste";
        $product->price = 123.4;
        $product->save();

        $response = $this->json('DELETE', "/api/products/{$product->id}");
        $response->assertStatus(200);
    }
}
