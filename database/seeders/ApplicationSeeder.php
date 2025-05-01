<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Como estos datos iniciales nos dan un poco igual, los rellenaremos aleatoriamente
        $candidateIds = range(1, 9); // No tendremos en cuenta al candidato 10, ya que no pertenece a la UE
        $offerIds = range(1, 5);

        foreach ($candidateIds as $candidateId) {
            $randomOffers = collect($offerIds)->shuffle()->take(rand(1, 3)); // Cada candidato aplicará entre 1 y 3 ofertas aleatorias
            foreach ($randomOffers as $offerId) {
                Application::create([
                    'candidate_id' => $candidateId,
                    'offer_id' => $offerId,
                ]);
            }
        }
    }
}
