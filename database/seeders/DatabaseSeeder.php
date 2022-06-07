<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{AgentSante, CategorieSituation};
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
        $agent = AgentSante::firstOrCreate([
            'nom'  =>'Bah',
            'prenom'=>'Sory binta',
            'adresse'=>'lambanyi',
            'email' =>'hadjasorybintabah@gmail.com',
            'telephone'=>'629901136',
            'qualification'=>'medecin generaliste',
        ]);

        $agent->update(['admin'=> true, 'password'=>Hash::make('sangaredi2014')]);

        CategorieSituation::firstOrCreate([
            'nom_cat_situation' => "DERNIER NÉ"
        ]);

        CategorieSituation::firstOrCreate([
            'nom_cat_situation' => "AVANT DERNIER NÉ"
        ]);
    }
}
