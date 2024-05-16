<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResourse extends JsonResource
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
            'title' => $this->title,
            'link' => $this->link,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'parent_id' => $this->parent_id,
            'sub_service' => $this->sub_service
        ];
    }
}
