<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'name' => 'Corporate Website',
            'image' => 'uploads\banner_pro_task_1719280124.png',
            'type'=>'BANNER',
            'description' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.'
        ]);

        Post::create([
            'name' => 'Our Team Comes with the experience and Knowledge',
            'image' => 'uploads\story_pro_task_1719280434.png',
            'type'=>'OURSTORY',
            'description' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>'
        ]);
    }
}
