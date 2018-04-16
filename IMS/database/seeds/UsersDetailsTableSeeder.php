<?php

use Illuminate\Database\Seeder;

class UsersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_details')->insert([
            'users_id' => 1,
            'permission_customer' => 1,
            'permission_supplier' => 1,
            'permission_product' => 1,
            'permission_stocks' => 1,
            'permission_sales' => 1,
            'permission_payment' => 1,
            'permission_report' => 1,
            'permission_users' => 1,
            'permission_status' => 1,
        ]);
    }
}
