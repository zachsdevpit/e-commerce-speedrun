<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Vendor;
use App\Models\VendorEarning;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VendorEarningFactory extends Factory
{
    protected $model = VendorEarning::class;

    public function definition(): array
    {
        return [
            'amount' => fake()->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'vendor_id' => Vendor::factory(),
            'order_id' => Order::factory(),
        ];
    }
}
