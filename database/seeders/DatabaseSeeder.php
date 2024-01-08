<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         About::factory()->create();
         Slider::factory()->create();
         Setting::factory()->create();
         Contact::factory(10)->create();
    }
}
