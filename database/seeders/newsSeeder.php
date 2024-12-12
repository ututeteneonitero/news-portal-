<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        DB::table('news')->insert([
            'title' => fake()->title(),
            'description' => fake()->paragraph(2,true),
            'category' => fake()->sentence(),
            'author' => fake()->email(),
        ]);
    }
}
