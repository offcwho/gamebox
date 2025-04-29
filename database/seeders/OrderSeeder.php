<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'surname' => 'Иванов',
                'name' => 'Иван',
                'lastname' => 'Иванович',
                'phone' => '+79999999999',
                'index' => '400200',
                'is_pay' => false
            ]
        ];

        foreach($orders as $order){
            Order::create($order);
        }
    }
}
