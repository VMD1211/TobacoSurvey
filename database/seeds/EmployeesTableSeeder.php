<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employee')->insert([
            'employee_name'=>str_random(10),
            'employee_address'=>str_random(10),
            'employee_phone'=>random_int(1000000000,9999999999),
            'employee_email'=>str_random(10).'@gmail.com',
            'employee_password'=>bcrypt(str_random(10)),
            'employee_token'=>str_random(10),
            'client_id'=>'1',
            'language_id'=>'1',
        ]);
    }
}
