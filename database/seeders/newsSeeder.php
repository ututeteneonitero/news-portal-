<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\news;
class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        news::factory(50)->create();
    }
}
