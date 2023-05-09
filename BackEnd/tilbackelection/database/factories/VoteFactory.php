<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
use \App\Models\Bulletin;
use \App\Models\Election;
use \App\Models\Participant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        $bulletins=count(Bulletin::all())-1;
        $elections=count(Election::all())-1;
        $participants=count(Participant::all())-1;
        return [
            //
            "date_election"=> fake()->date(),
            "idBulletin"=> rand(1,$bulletins),
            "idParticipant"=> rand(1,$participants),
            "idElection"=> rand(1,$elections)
        ];
    }
}
