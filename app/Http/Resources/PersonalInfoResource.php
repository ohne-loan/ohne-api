<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
			'mother_name' => $this->mother_name,
			'father_name' => $this->father_name,
			'spouse' => new SpouseResource($this->whenLoaded('spouse')),
			'educationLevel' => new EducationLevelResource($this->whenLoaded('educationLevel')),
			'naturality' => [
			    'city'  => $this->naturality,
                'uf' => [
                    'id' => $this->naturality_id
                ]
            ],
			'nacionality' => $this->nacionality,
			'incomeProof' => new UserDocumentResource($this->whenLoaded('incomeProof'))
		];
    }

    /**
     * This method is necessary just to preserve backward compatibility with non-Eloquent resources.
     * The objects inside a JsonResource now must implement ArrayAccess. This means you cannot create a Resource
     * of a Collection of plain objects like we're doing here with a RAW Query.
     *
     * We're applying the changes suggested by Graham Campbell in #29860.
     *
     * More information
     *      https://github.com/laravel/framework/issues/29916
     *      https://github.com/laravel/framework/issues/29858
     *      https://github.com/laravel/framework/pull/29860
     */
    public function offsetExists($offset)
    {
        return (is_array($offset) || $offset instanceof ArrayAccess) && isset($this->resource[$offset]);
    }
}
