<?php

namespace Database\Seeders;

use App\Models\Plattform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlattformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plattforms = ["Ps5", "Xbox Series X", "Xbox Series S", "Switch", "Switch 2", "Pc"];

        foreach ($plattforms as $plattform) {

            $newPlattform = new Plattform();

            $newPlattform->name = $plattform;
            $newPlattform->save();
        }
    }
}
