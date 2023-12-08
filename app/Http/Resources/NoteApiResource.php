<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request); // viene por defecto

        return [
            'id'            => $this->id,
            'title'         => 'Title: ' . $this->title,
            'description'   => $this->description,
            'example'       => 'This is an example'
        ];
    }
}
