<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
use \App\Models\Vote;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Election>
 */
class ElectionFactory extends Factory
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
        $vote=count(Vote::all())-1;
        return [
            //
            "date_election"=> Str::upper(Str::random(10)),
            "label"=> Str::upper(Str::random(10)),
            "description"=> Str::upper(Str::random(10)),
            "statut"=> $status[rand(0,1)],
            "idvote"=> rand(1,$vote)
        ];
    }
}
