<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::create([
            'name' => 'Carlos',
            'surname' => 'González',
            'email' => 'carlos.gonzalez@example.com',
            'birthdate' => '1990-05-12',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Lucía',
            'surname' => 'Martínez',
            'email' => 'lucia.martinez@example.com',
            'birthdate' => '1988-11-03',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Javier',
            'surname' => 'Sánchez',
            'email' => 'javier.sanchez@example.com',
            'birthdate' => '1995-02-18',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Elena',
            'surname' => 'Ruiz',
            'email' => 'elena.ruiz@example.com',
            'birthdate' => '1992-07-20',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Mario',
            'surname' => 'Ortega',
            'email' => 'mario.ortega@example.com',
            'birthdate' => '1997-10-09',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Sara',
            'surname' => 'Moreno',
            'email' => 'sara.moreno@example.com',
            'birthdate' => '1985-04-23',
            'location' => 'España',
            'location_is_eu' => true,
        ]);

        
        Candidate::create([
            'name' => 'Liam',
            'surname' => 'O\'Connor',
            'email' => 'liam.oconnor@example.com',
            'birthdate' => '1991-03-14',
            'location' => 'Irlanda',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Sophie',
            'surname' => 'Dubois',
            'email' => 'sophie.dubois@example.com',
            'birthdate' => '1994-09-01',
            'location' => 'Francia',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Luca',
            'surname' => 'Rossi',
            'email' => 'luca.rossi@example.com',
            'birthdate' => '1989-06-27',
            'location' => 'Italia',
            'location_is_eu' => true,
        ]);

        Candidate::create([
            'name' => 'Kenji',
            'surname' => 'Takahashi',
            'email' => 'kenji.takahashi@example.com',
            'birthdate' => '1987-12-05',
            'location' => 'Japón',
            'location_is_eu' => false,
        ]);
    }
}
