<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    private $order_statuses = [
        [
            'name' => 'inviato',
            'description' => '...'
        ],
        
        [
            'name' => 'completato',
            'description' => '...'
        ],
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->order_statuses as $status)
        {
            OrderStatus::create([
                'name' => $status['name'],
                'description' => $status['description'],
            ]);
        }
    }
}
