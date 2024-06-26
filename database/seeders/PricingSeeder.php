<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;
class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'title' => 'Starter',
            'price' => '0'
        ]);

        Package::create([
            'title' => 'Exclusive',
            'price' => '99'
        ]);

        Package::create([
            'title' => 'Premium',
            'price' => '150'
        ]);
    }
}
