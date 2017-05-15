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
        Status::insert([
            [
            'id' => '1',
            'name' => 'active'
            ],
            [
                'id' => '2',
                'name' => 'inactive'
            ],
            [
                'id' => '3',
                'name' => 'pending'
            ],
            [
                'id' => '4',
                'name' => 'banned'
            ]
        ]);
    }
}
