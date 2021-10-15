<?php

namespace Database\Seeders;

use App\Models\Remuneration;
use Illuminate\Database\Seeder;

class RemunerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Remuneration::factory(150)->create();
    }
}
