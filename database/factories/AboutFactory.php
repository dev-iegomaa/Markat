<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Testing\File;

class AboutFactory extends Factory
{
    const PATH = 'uploaded/about/';
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'image' => File::fake()->create(time() . '_about')->move(public_path(self::PATH))->getFilename(),
            'paragraph' => $this->faker->paragraphs(2, true)
        ];
    }
}
