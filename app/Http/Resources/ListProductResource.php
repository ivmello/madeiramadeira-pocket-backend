<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ListProductResource extends ResourceCollection
{
    public static $wrap = null;

    public function toArray($request)
    {
        $result = [
            'success' => true,
            // 'data' => $this->collection,
            'data' => ProductItemResource::collection($this->collection),
        ];

        return $result;
    }
}
