<?php

namespace Database\Seeders;

use App\Models\OrderReturnStatus;
use Illuminate\Database\Seeder;

class OrderReturnStatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            'Requested',
            'Under Review',
            'Approved',
            'Rejected',
            'Return Shipped',
            'Return Received',
            'Completed',
            'Cancelled',
        ];

        OrderReturnStatus::insert(array_map(fn ($name) => [
            'name' => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ], $statuses));
    }
}
