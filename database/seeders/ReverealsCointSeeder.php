<?php

namespace Database\Seeders;

use App\Models\ReverealsCoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReverealsCointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'price'=>10,
                'plans'=>'BTC MINER 10',
                'description'=>'Return per day:
                0.00027 BTC - 0.00034 BTC
                10% Maintenance cost per day'
            ],
            [
                'price'=>100,
                'plans'=>'BTC MINER 100',
                'description'=>'Return per day:
                0.0026 BTC - 0.0046 BTC
                10% Maintenance cost per day'
            ],
            [
                'price'=>1000,
                'plans'=>'BTC MINER 1000',
                'description'=>'Return per day:
                0.031 BTC - 0.048 BTC
                10% Maintenance cost per day'
            ],
            [
                'price'=>5000,
                'plans'=>'BTC MINER 5000',
                'description'=>'Return per day:
                0.14 BTC - 0.26 BTC
                10% Maintenance cost per day'
            ]
        ];
        foreach ($data as $datas) {
            ReverealsCoint::create($datas);
        }
    }
}
