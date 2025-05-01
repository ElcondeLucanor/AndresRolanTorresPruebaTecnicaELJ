<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Offer;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Offer::create([
            'title' => 'Desarrollador Backend - Java',
            'description' => 'Buscamos un desarrollador backend con experiencia en Java para unirse a nuestro equipo.',
            'salary' => 35000.00,
            'location' => 'España',
        ]);

        Offer::create([
            'title' => 'Frontend Developer',
            'description' => 'Estamos buscando un desarrollador frontend con experiencia en React.',
            'salary' => 30000.00,
            'location' => 'España',
        ]);

        Offer::create([
            'title' => 'Data Analyst',
            'description' => 'Buscamos un analista de datos con experiencia en Python y SQL.',
            'salary' => 28000.00,
            'location' => 'España',
        ]);

        Offer::create([
            'title' => 'Project Manager',
            'description' => 'Se busca un Project Manager con experiencia en gestión de equipos ágiles.',
            'salary' => 45000.00,
            'location' => 'Reino Unido',
        ]);

        Offer::create([
            'title' => 'DevOps Engineer',
            'description' => 'Estamos buscando un ingeniero DevOps con experiencia en Kubernetes y AWS.',
            'salary' => 50000.00,
            'location' => 'Alemania',
        ]);
    }
}
