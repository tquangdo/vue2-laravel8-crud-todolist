<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use Illuminate\Http\Resources\Json\ResourceCollection;

class TodoListCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return JSON thi phai extends "JsonResource"
        return [
            'id' => $this->id,
            'content' => $this->content,
            'checked' => $this->checked,
            'done' => $this->done,
        ];
    }
}
