<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorsoSeeder extends Seeder
{
    public function run()
    {
        $annoAccademico = date('Y'); 

        $corsoEsistente = DB::table('corso')->where('anno', $annoAccademico)->first();

        if (!$corsoEsistente) {
            DB::table('corso')->insert([
                'canale' => 'A-L', 
                'anno' => $annoAccademico,
            ]);
            DB::table('corso')->insert([
                'canale' => 'M-Z', 
                'anno' => $annoAccademico,
            ]);
        }
    }
}