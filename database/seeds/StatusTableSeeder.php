<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'id' => '1',
            'name' => 'active'
        ]);
        Status::create([
            'id' => '2',
            'name' => 'inactive'
        ]);
        Status::create([
            'id' => '3',
            'name' => 'pending'
        ]);
        Status::create([
            'id' => '4',
            'name' => 'banned'
        ]);
    }
}
