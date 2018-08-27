<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request)
        return [
            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->summary,
            'feature_image' => $this->feature_image,
            'author' => $this->author->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
