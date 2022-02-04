<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductItemResource extends JsonResource
{
    public static $wrap = null;

    public function toArray($request)
    {
        $imageUrl = '';
        if (!empty($this->image)) {
            $imageUrl = Storage::disk('s3')->url($this->image);
        }
        $result = [
            'teste' => 'fsdfs',
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $imageUrl,
        ];

        return $result;
    }
}
