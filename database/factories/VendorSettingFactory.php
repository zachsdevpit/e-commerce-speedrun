<?php

namespace Database\Factories;

use App\Models\Vendor;
use App\Models\VendorSetting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VendorSettingFactory extends Factory
{
    protected $model = VendorSetting::class;

    public function definition(): array
    {
        return [
            'key' => fake()->word(),
            'value' => fake()->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'vendor_id' => Vendor::factory(),
        ];
    }
}
