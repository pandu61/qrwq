<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class CompaniesSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<120; $i++) {
            $name = Str::random(10);
            
            DB::table('companies')->insert([
                'email' => 'company@'. $name .'.com',
                'nama' => $name,
                'logo' => $name,
                'website'=> $name.'.id',
            ]);
        }
    }
}
