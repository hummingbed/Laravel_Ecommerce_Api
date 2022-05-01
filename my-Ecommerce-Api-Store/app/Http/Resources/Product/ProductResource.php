<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        function stC(){
            if($this->stock > 0){
                return $this->stock;
            }else{
                return 'out of stock';
            }
        }
       
        return [
            'name' => $this->name,
            'detail' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock > 0 ? $this->stock : "out of stock",
            'discount' => $this->discount,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : "no rating yet",
            'href' => [
                'reviews' => route('reviews.index',$this->id)
            ]
        ];
    }
}
