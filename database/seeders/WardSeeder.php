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
                'ward_number' => 01,
                'name' => 'Police Barracks',
                'code' => '01-PB',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 02,
                'name' => 'Beat Street',
                'code' => '02-BS',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 03,
                'name' => 'Langares',
                'code' => '03-LG',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 04,
                'name' => 'Premiers Hill',
                'code' => '04-PH',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 05,
                'name' => 'Keas Hidden Valley',
                'code' => '05-KHV',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 06,
                'name' => 'Aipus Newtown',
                'code' => '06-AN',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 07,
                'name' => 'Wabag Secondary School',
                'code' => '07-WSS',
                'llg_id' => $llgs['Wabag Urban LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Wabag Rural LLG
            [
                'ward_number' => 01,
                'name' => 'Tukusanda',
                'code' => '01-TK',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 02,
                'name' => 'Aipanda',
                'code' => '01-AP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 03,
                'name' => 'Tambitanis',
                'code' => '03-TB',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 04,
                'name' => 'Lakolam',
                'code' => '04-LK',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 05,
                'name' => 'Kubalis',
                'code' => '05-KB',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 06,
                'name' => 'Nandi',
                'code' => '06-ND',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 07,
                'name' => 'Sakarip',
                'code' => '07-SK',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 8,
                'name' => 'Sopas',
                'code' => '08-SP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 9,
                'name' => 'Kiwi No. 1',
                'code' => '09-KW1',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 10,
                'name' => 'Kaiap',
                'code' => '10-KP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 11,
                'name' => 'Kamas',
                'code' => '11-KM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 12,
                'name' => 'Kopen',
                'code' => '12-KPN',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 13,
                'name' => 'Sari',
                'code' => '13-SR',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 14,
                'name' => 'Sore',
                'code' => '14-SRE',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 15,
                'name' => 'Teremanda',
                'code' => '15-TM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 16,
                'name' => 'Wabag',
                'code' => '16-WBG',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 17,
                'name' => 'Lakemanda',
                'code' => '17-LKM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 18,
                'name' => 'Sakales',
                'code' => '18-SKS',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 19,
                'name' => 'Keas/Pauas',
                'code' => '19-KPS',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 20,
                'name' => 'Arelya/Aipus',
                'code' => '20-AAP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 21,
                'name' => 'Wakumale',
                'code' => '21-WML',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 22,
                'name' => 'Lenki/Pipi',
                'code' => '22-LPP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 23,
                'name' => 'Ainumanda',
                'code' => '23-ANM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 24,
                'name' => 'Rakamanda',
                'code' => '24-RKM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 25,
                'name' => 'Yokomanda',
                'code' => '25-YKM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 26,
                'name' => 'Imi',
                'code' => '26-IMI',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 27,
                'name' => 'Wei',
                'code' => '27-WEI',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 28,
                'name' => 'Birip',
                'code' => '28-BRP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 29,
                'name' => 'Akom',
                'code' => '29-AKM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 30,
                'name' => 'Lukirap',
                'code' => '30-LKR',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 31,
                'name' => 'Yokomanda',
                'code' => '31-YKM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 32,
                'name' => 'Lakopenda',
                'code' => '32-LKP',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 33,
                'name' => 'Yailengis',
                'code' => '33-YLS',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 34,
                'name' => 'Tumbilam',
                'code' => '34-TML',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 35,
                'name' => 'Aiyokolam',
                'code' => '35-AYK',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 36,
                'name' => 'Keas-Upper Lai',
                'code' => '36-KUL',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 37,
                'name' => 'Komaites',
                'code' => '37-KMT',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 38,
                'name' => 'Kiwi No. 2',
                'code' => '38-KW2',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 39,
                'name' => 'Amala',
                'code' => '39-AM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 40,
                'name' => 'Manjop',
                'code' => '40-MJ',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 41,
                'name' => 'Pandam',
                'code' => '41-PDM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 42,
                'name' => 'Wanomanda',
                'code' => '42-WNM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 43,
                'name' => 'Makapumanda',
                'code' => '43-MPM',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 44,
                'name' => 'Yokota',
                'code' => '44-YKT',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 45,
                'name' => 'Peaulam',
                'code' => '45-PAL',
                'llg_id' => $llgs['Wabag Rural LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Maramuni LLG
            [
                'ward_number' => 01,
                'name' => 'Biak/Pai',
                'code' => '01-BP',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 02,
                'name' => 'Malaumanda/Pokale',
                'code' => '02-MP',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 03,
                'name' => 'Pasalagus',
                'code' => '03-PLG',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 04,
                'name' => 'Wailep',
                'code' => '04-WLP',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 05,
                'name' => 'Tonori',
                'code' => '05-TNR',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 06,
                'name' => 'Kaimtok',
                'code' => '06-KMT',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 07,
                'name' => 'Wangalongen',
                'code' => '07-WGL',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 8,
                'name' => 'Nelyauk',
                'code' => '08-NYK',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 9,
                'name' => 'Ilya',
                'code' => '09-ILY',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 10,
                'name' => 'Poreak',
                'code' => '10-PRK',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 11,
                'name' => 'Warakom',
                'code' => '11-WKM',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 12,
                'name' => 'Penale',
                'code' => '12-PNL',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ward_number' => 13,
                'name' => 'Ned',
                'code' => '13-NED',
                'llg_id' => $llgs['Maramuni LLG'],
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
