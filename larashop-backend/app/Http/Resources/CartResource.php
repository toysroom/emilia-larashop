<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user' => $this->user,
            'name' => $this->user->name,
            'product_id' => $this->product_id,
            'product' => new ProductResource($this->product),
            'quantity' => $this->quantity,
            'order_date' => $this->order_date,
        ];
    }
}
