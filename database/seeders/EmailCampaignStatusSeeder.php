<?php

namespace Database\Seeders;

use App\Models\EmailCampaignStatus;
use Illuminate\Database\Seeder;

class EmailCampaignStatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            ['name' => 'draft', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'scheduled', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'sent', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'failed', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cancelled', 'created_at' => now(), 'updated_at' => now()],
        ];

        EmailCampaignStatus::insert($statuses);
    }
}
