<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 51; $i++) { 
            DB::table('customers')->insert([
                'customer_name' => str_random(10),
                'customer_number' => rand(92300000, 923999999),
                'customer_email' => str_random(10).'@test.com',
                'status'=> '1',
                'created_at' => new \DateTime,
                'updated_at'=> new \Datetime, 
            ]);
        }
    }
}
