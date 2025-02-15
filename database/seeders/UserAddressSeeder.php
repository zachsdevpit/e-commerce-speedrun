<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        $userRole = Role::where('name', 'User')->first();
        $users = User::where('role_id', $userRole->id)->get();
        $addresses = [];

        foreach ($users as $user) {
            $addressCount = rand(1, 3);

            for ($i = 0; $i < $addressCount; $i++) {
                $addresses[] = [
                    'user_id'       => $user->id,
                    'address_line1' => fake()->streetAddress(),
                    'address_line2' => rand(0, 1) ? fake()->secondaryAddress() : null,
                    'city'          => fake()->city(),
                    'state'         => fake()->state(),
                    'country'       => fake()->country(),
                    'postal_code'   => fake()->postcode(),
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            }
        }

        UserAddress::insert($addresses);
    }
}
