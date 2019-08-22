<?php

use Illuminate\Database\Seeder;

class InterviewersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('interviewers')->insert([
           'interviewer_firstname'=>'John',
           'interviewer_lastname'=>'Cena',
            'interviewer_fullname'=>'John Cena',
            'interviewer_address'=>'New York',
            'interviewer_status'=>'1',
            'interviewer_longitude'=>'18.45',
            'interviewer_latitude'=>'20.58',
            'interviewer_numberoftime'=>'1',
            'emppro_id'=>'1',
            'language_id'=>'1',
            'interviewer_deviceid_uploaded'=>'',
        ]);
    }
}
