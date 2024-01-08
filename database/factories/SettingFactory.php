<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Testing\File;

class SettingFactory extends Factory
{
    const PATH = 'uploaded/setting/';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'logo' => File::fake()->create(time() . '_setting')->move(public_path(self::PATH))->getFilename(),
            'phone' => $this->faker->phoneNumber,
            'tracking_apis' => $this->faker->paragraphs(2, true)
        ];
    }
}
