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
            'name' => 'Active'
            ],
            [
                'id' => '2',
                'name' => 'Inactive'
            ],
            [
                'id' => '3',
                'name' => 'Pending'
            ],
            [
                'id' => '4',
                'name' => 'Banned'
            ]
        ]);
    }
}
