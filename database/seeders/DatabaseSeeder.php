<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $wilayas = [
            'Adrar',
            'Chlef',
            'Laghouat',
            'Oum El Bouaghi',
            'Batna',
            'Béjaïa',
            'Biskra',
            'Béchar',
            'Blida',
            'Bouira',
            'Tamanrasset',
            'Tébessa',
            'Tlemcen',
            'Tiaret',
            'Tizi Ouzou',
            'Alger',
            'Djelfa',
            'Jijel',
            'Sétif',
            'Saïda',
            'Skikda',
            'Sidi Bel Abbès',
            'Annaba',
            'Guelma',
            'Constantine',
            'Médéa',
            'Mostaganem',
            'M\'Sila',
            'Mascara',
            'Ouargla',
            'Oran',
            'El Bayadh',
            'Illizi',
            'Bordj Bou Arréridj',
            'Boumerdès',
            'El Tarf',
            'Tindouf',
            'Tissemsilt',
            'El Oued',
            'Khenchela',
            'Souk Ahras',
            'Tipaza',
            'Mila',
            'Aïn Defla',
            'Naâma',
            'Aïn Témouchent',
            'Ghardaïa',
            'Relizane',
        ];
    
        foreach ($wilayas as $wilaya) {
            DB::table('regions')->insert([
                'name' => $wilaya,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

