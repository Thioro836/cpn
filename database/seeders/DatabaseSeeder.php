<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AgentSante;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AgentSante::create([
            'nom'  =>'Bah',
            'prenom'=>'Sory binta',
            'adresse'=>'lambanyi',
            'email' =>'hadjasorybintabah@gmail.com',
            'telephone'=>'629901136',
            'qualification'=>'medecin generaliste',
            'password'=>Hash::make('sangaredi2014')
        ]);
    }
}
