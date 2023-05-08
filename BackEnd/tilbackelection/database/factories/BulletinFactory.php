<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Vote;
use Illuminate\support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bulletin>
 */
class BulletinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {        
        $vote=count(Vote::all())-1;
        $color=['Rouge','Noir','Vert','Bleu','Orange','Gris','Rose','Jaune'];
        return [
            //
            "label"=> Str::upper(Str::random(10)),
            "couleur"=> $color[rand(0,8)],
            "photo"=>Str::upper(Str::random(10)),
            "idvote"=> rand(1,$vote)
        ];
    }
}
