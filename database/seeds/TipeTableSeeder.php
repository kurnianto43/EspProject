<?php

use Illuminate\Database\Seeder;
use App\Tipe;

class TipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe = Tipe::create([

        	'nama_tipe' => 'M080',
        ]);
    }
}
