<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('languages')->insert([
            'language_name'=>'Viet Nam',
            'language_code'=>random_int(0,100),
            'language_picture'=>'vn.png'
        ]);
    }
}
