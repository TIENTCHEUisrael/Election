<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
use \App\Models\Region;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sexe=['M','F'];
        $status=['Send','notSend'];

        //$random_lettre = chr(rand(ord($masculin), ord($feminin)));
        $regions=count(Region::all())-1;
        return [
            //
            "cni"=> Str::upper(Str::random(10)),
            "nom"=> $this -> faker ->name(),
            "prenom"=> $this -> faker->firstName(),
            "telephone"=> $this -> faker ->phoneNumber(),
            "age"=> rand(21,100),
            "sexe"=>$sexe[rand(0,1)],
            "status"=> $status[rand(0,1)],
            "login"=> $this->faker ->username(),
            "pwd"=> Str::upper(Str::random(10)),
            "email"=> $this->faker ->email(),
            "idregion"=> rand(1,$regions)
        ];
    }
}
