<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class VendorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "business_name" => $this->business_name,
            "description" => $this->description,
            "address" => $this->address,
            "business_logo" => config('app.url').'business_logos/'.$this->business_logo,
            "created_at" => Carbon::parse($this->created_at)->toDateTimeString()
        ];
    }
}
