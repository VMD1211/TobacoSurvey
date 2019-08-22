<?php

use Illuminate\Database\Seeder;

class InterviewerInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inteviewerinformation')->insert([
        'intinf_sex'=>'Male',
        'intinf_region'=>'USA',
        'intinf_precinct'=>'New York',
        'intinf_group'=>'None',
        'intinf_subgroup'=>'None',
        'intinf_family_no'=>'1',
        'intinf_interview_no'=>'1',
        'interviewer_id'=>'1',
        'nation_code'=>'1975',
        'adminprovince_code'=>'1975',
        'admdistrict_code'=>'1135',
        'admcommune_code'=>'1754',
        ]);
    }
}
