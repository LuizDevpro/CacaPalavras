<?php

namespace Database\Seeders;

use App\Models\Palavra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PalavraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $palavras = [
            ['palavra' => 'VARIÁVEL', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'FUNÇÃO', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'LOOPING', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'BOOLEANO', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'ALGORITMO', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'OBJETO', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'STRING', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'CLASSE', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'VETOR', 'dica' => 'PROGRAMAÇÃO'],
            ['palavra' => 'MÉTODO', 'dica' => 'PROGRAMAÇÃO'],

            ['palavra' => 'MONITOR', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'TECLADO', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'IMPRESSORA', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'SCANNER', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'BACKUP', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'HARDWARE', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'SOFTWARE', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'CURSOR', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'PROCESSADOR', 'dica' => 'INFORMÁTICA'],
            ['palavra' => 'NAVEGADOR', 'dica' => 'INFORMÁTICA'],

            ['palavra' => 'ELEFANTE', 'dica' => 'ANIMAL'],
            ['palavra' => 'GIRAFAS', 'dica' => 'ANIMAL'],
            ['palavra' => 'CAMELO', 'dica' => 'ANIMAL'],
            ['palavra' => 'GOLFINHO', 'dica' => 'ANIMAL'],
            ['palavra' => 'JACARÉ', 'dica' => 'ANIMAL'],
            ['palavra' => 'GATO', 'dica' => 'ANIMAL'],
            ['palavra' => 'TIGRE', 'dica' => 'ANIMAL'],
            ['palavra' => 'URSO', 'dica' => 'ANIMAL'],
            ['palavra' => 'BALEIA', 'dica' => 'ANIMAL'],
            ['palavra' => 'RATO', 'dica' => 'ANIMAL'],

            ['palavra' => 'BANANA', 'dica' => 'FRUTA'],
            ['palavra' => 'ABACATE', 'dica' => 'FRUTA'],
            ['palavra' => 'LARANJA', 'dica' => 'FRUTA'],
            ['palavra' => 'MORANGO', 'dica' => 'FRUTA'],
            ['palavra' => 'LIMÃO', 'dica' => 'FRUTA'],
            ['palavra' => 'MANGA', 'dica' => 'FRUTA'],
            ['palavra' => 'UVA', 'dica' => 'FRUTA'],
            ['palavra' => 'MELÃO', 'dica' => 'FRUTA'],
            ['palavra' => 'CEREJA', 'dica' => 'FRUTA'],
            ['palavra' => 'FIGO', 'dica' => 'FRUTA'],

            ['palavra' => 'BRASIL', 'dica' => 'PAÍS'],
            ['palavra' => 'CANADÁ', 'dica' => 'PAÍS'],
            ['palavra' => 'CHILE', 'dica' => 'PAÍS'],
            ['palavra' => 'JAPÃO', 'dica' => 'PAÍS'],
            ['palavra' => 'EGITO', 'dica' => 'PAÍS'],
            ['palavra' => 'ÍNDIA', 'dica' => 'PAÍS'],
            ['palavra' => 'CHINA', 'dica' => 'PAÍS'],
            ['palavra' => 'SUÉCIA', 'dica' => 'PAÍS'],
            ['palavra' => 'ITÁLIA', 'dica' => 'PAÍS'],
            ['palavra' => 'FRANÇA', 'dica' => 'PAÍS'],
        ];

        foreach ($palavras as $palavra) {
            Palavra::create($palavra);
        }
    }
}
