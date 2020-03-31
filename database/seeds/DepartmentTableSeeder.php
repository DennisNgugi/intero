<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dep = [
        'Outdoor & Garden',
        'Home improvement',
        'Home services',
        'Office design',
        'Design & Remodelling',
        ];

        foreach ($dep as $d) {
             Department::create(['department_name' => $d]);
        }
    }
}
