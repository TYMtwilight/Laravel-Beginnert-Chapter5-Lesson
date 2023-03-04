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
        DB::table('employees')->insert([
            [
                'employee_name' => '鈴木一郎',
                'section' => '開発部',
                'salary' => 350000,
            ],
            [
                'employee_name' => '佐藤二朗',
                'section' => '営業部',
                'salary' => 200000,
            ],
            [
                'employee_name' => '山田花子',
                'section' => '営業部',
                'salary' => 400000,
            ]
        ]);
    }
}
