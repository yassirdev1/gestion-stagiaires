<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use Illuminate\Database\Seeder;

class StagiaireSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['nom' => 'El Amrani', 'prenom' => 'Salma', 'email' => 'salma.elamrani@example.test', 'telephone' => '0610000001', 'ecole' => 'ISTA NTIC Hay Riad', 'filiere' => 'DEVELOPPEMENT WEB FULL STACK', 'date_debut' => '2026-02-02', 'date_fin' => '2026-04-30'],
            ['nom' => 'Bennani', 'prenom' => 'Youssef', 'email' => 'youssef.bennani@example.test', 'telephone' => '0610000002', 'ecole' => 'OFPPT Salé', 'filiere' => 'DEV', 'date_debut' => '2026-02-02', 'date_fin' => '2026-04-30'],
            ['nom' => 'Alaoui', 'prenom' => 'Imane', 'email' => 'imane.alaoui@example.test', 'telephone' => '0610000003', 'ecole' => 'ISTA NTIC Hay Riad', 'filiere' => 'DEVELOPPEMENT WEB FULL STACK', 'date_debut' => '2026-02-09', 'date_fin' => '2026-05-08'],
            ['nom' => 'Tazi', 'prenom' => 'Hamza', 'email' => 'hamza.tazi@example.test', 'telephone' => '0610000004', 'ecole' => 'OFPPT Kénitra', 'filiere' => 'DEV', 'date_debut' => '2026-02-09', 'date_fin' => '2026-05-08'],
            ['nom' => 'Berrada', 'prenom' => 'Nour', 'email' => 'nour.berrada@example.test', 'telephone' => '0610000005', 'ecole' => 'ISTA NTIC Hay Riad', 'filiere' => 'DEVELOPPEMENT WEB FULL STACK', 'date_debut' => '2026-02-16', 'date_fin' => '2026-05-15'],
            ['nom' => 'Chraibi', 'prenom' => 'Omar', 'email' => 'omar.chraibi@example.test', 'telephone' => '0610000006', 'ecole' => 'OFPPT Salé', 'filiere' => 'DEV', 'date_debut' => '2026-02-16', 'date_fin' => '2026-05-15'],
            ['nom' => 'Fassi', 'prenom' => 'Aya', 'email' => 'aya.fassi@example.test', 'telephone' => '0610000007', 'ecole' => 'ISTA NTIC Hay Riad', 'filiere' => 'DEVELOPPEMENT WEB FULL STACK', 'date_debut' => '2026-03-02', 'date_fin' => '2026-05-29'],
            ['nom' => 'Lahlou', 'prenom' => 'Anas', 'email' => 'anas.lahlou@example.test', 'telephone' => '0610000008', 'ecole' => 'OFPPT Kénitra', 'filiere' => 'DEV', 'date_debut' => '2026-03-02', 'date_fin' => '2026-05-29'],
            ['nom' => 'Mansouri', 'prenom' => 'Sara', 'email' => 'sara.mansouri@example.test', 'telephone' => '0610000009', 'ecole' => 'ISTA NTIC Hay Riad', 'filiere' => 'DEVELOPPEMENT WEB FULL STACK', 'date_debut' => '2026-03-09', 'date_fin' => '2026-06-05'],
            ['nom' => 'Idrissi', 'prenom' => 'Mehdi', 'email' => 'mehdi.idrissi@example.test', 'telephone' => '0610000010', 'ecole' => 'OFPPT Salé', 'filiere' => 'DEV', 'date_debut' => '2026-03-09', 'date_fin' => '2026-06-05'],
        ];

        foreach ($records as $record) {
            Stagiaire::updateOrCreate(['email' => $record['email']], $record);
        }
    }
}
