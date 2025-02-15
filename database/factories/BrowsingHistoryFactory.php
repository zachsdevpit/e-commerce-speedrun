<?php

namespace Database\Factories;

use App\Models\BrowsingHistory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BrowsingHistoryFactory extends Factory
{
    protected $model = BrowsingHistory::class;

    public function definition(): array
    {
        return [
            'viewed_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
