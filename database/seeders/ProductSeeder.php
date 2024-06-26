<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Refreshing Designs',
            'icon' => 'fas fa-paint-brush',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);
        
        Product::create([
            'name' => 'Solid Bootstrap 5',
            'icon' => 'fab fa-bootstrap',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);
        
        Product::create([
            'name' => '100+ Components',
            'icon' => 'fas fa-code',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);
        
        Product::create([
            'name' => 'Speed Optimized',
            'icon' => 'fas fa-tachometer-alt',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);
        
        Product::create([
            'name' => 'Fully Customizable',
            'icon' => 'fas fa-layer-group',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);
        
        Product::create([
            'name' => 'Regular Updates',
            'icon' => 'fas fa-sync-alt',
            'description' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy.'
        ]);     
    }
}
