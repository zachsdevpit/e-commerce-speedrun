<?php

namespace Database\Seeders;

use App\Models\OrderRefundStatus;
use Illuminate\Database\Seeder;

class OrderRefundStatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            'Pending',
            'Processing',
            'Partially Refunded',
            'Refunded',
            'Failed',
            'Cancelled',
            'Declined',
        ];

        OrderRefundStatus::insert(array_map(fn (string $name) => [
            'name' => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ], $statuses));
    }
}
