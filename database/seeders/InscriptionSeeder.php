<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscription;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inscription = new Inscription;
        $inscription->user_id=5;
        $inscription->group_id=1;
        $inscription->save();

        $inscription = new Inscription;
        $inscription->user_id=6;
        $inscription->group_id=2;
        $inscription->save();

        $inscription = new Inscription;
        $inscription->user_id=7;
        $inscription->group_id=3;
        $inscription->save();

        $inscription = new Inscription;
        $inscription->user_id=8;
        $inscription->group_id=4;
        $inscription->save();

        $inscription = new Inscription;
        $inscription->user_id=9;
        $inscription->group_id=5;
        $inscription->save();

    }
}
