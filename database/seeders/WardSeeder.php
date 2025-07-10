<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llgs = DB::table('llgs')->pluck('id', 'name');

        DB::table('wards')->insert([
            // Wabag Urban LLG
            [
                'name' => 'Wabag Urban Ward 1',
                'code' => 'WU1',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Wabag Urban Ward 2',
                'code' => 'WU2',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Wabag Rural LLG
            [
                'name' => 'Wabag Rural Ward 1',
                'code' => 'WR1',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Wabag Rural Ward 2',
                'code' => 'WR2',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Maramuni LLG
            [
                'name' => 'Maramuni Ward 1',
                'code' => 'MM1',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Maramuni Ward 2',
                'code' => 'MM2',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
