<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class eventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        	'id'=>(string)$this->id,
            'attributes'=>[
                'priority'=>$this->priority,
                'status'=>$this->status,
                'published'=>$this->published
                

            ],

            'relationships'=>[
              'id'=>(string)$this->user->id,
              'email'=>$this->user->email,
              'email_verified_at'=>$this->user->email_verified_at,
              'password'=>$this->user->password,
              'remember_token'=>$this->user->remember_token,
              'created_at'=>$this->user->created_at,
              'updated_at'=>$this->user->updated_at
          ]

        ];
    }
}
