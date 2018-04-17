<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 51; $i++) { 
            DB::table('supplier')->insert([
                'name' => str_random(10),
                'address' => str_random(50),
                'number' => rand(92300000, 923999999),
                'email' => str_random(10).'@test.com',
                'status'=> '1',
                'created_at' => new \DateTime,
                'updated_at'=> new \Datetime, 
            ]);
        }
    }
}
