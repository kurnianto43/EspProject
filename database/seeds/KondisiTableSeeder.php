<?php

use Illuminate\Database\Seeder;
use App\KOndisi;

class KondisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$kondisi = Kondisi::create([
       		'nama_kondisi' => 'Good',
       	]);
    }
}
