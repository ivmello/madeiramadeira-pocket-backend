<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateProductResource extends JsonResource
{
    public static $wrap = null;

    public function toArray($request)
    {
        $result = [
            'updated' => true,
            'success' => true,
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price
            ]
        ];

        return $result;
    }
}
