<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class eventsTopicsLessonsInstructorsResource extends JsonResource
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
                'date'=>$this->date,
                'time_starts'=>$this->time_starts,
                'time_ends'=>$this->time_ends,
                'duration'=>$this->duration,
                'room'=>$this->room,
                'location_url'=>$this->location_url,
                'priority'=>$this->priority,
                'automate_email'=>$this->automate_email,
                'send_automate_email'=>$this->send_automate_email
                 ],
                 'relationships'=>[
                 	'id'=>(string)$this->instructor->id,




                 ]
    ];
    }
}
