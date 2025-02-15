<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        PaymentMethod::insert([
            ['name' => 'Credit Card', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PayPal', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bank Transfer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Pay', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Google Pay', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
