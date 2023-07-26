<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class PostResource extends JsonResource
{
    //define properti
    public $status;
    public $message;
    public $resource;
    
    /**
     * __construct
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return [
        //     'success'   => $this->status,
        //     'message'   => $this->message,
        //     'data'      => $this->resource,
        // ];
        // $data = $this->resource->toArray();
        $data = $this->resource->toArray();       

        return $this->merge([
            'success' => $this->status,
            'message' => $this->message,
            'data' => $data,
        ]);
    }
}