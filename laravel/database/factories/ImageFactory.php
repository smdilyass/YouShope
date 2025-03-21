<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this ->faker->unique()->randomElement([
                'https://picsum.photos',
                'media/example2.png',
                'media/example3.png',
                'media/example4.png',
                'media/example5.png',
                'media/example6.png',
                'media/example7.png',
                'media/example8.png',
                'media/example9.png',
                'media/example10.png',
                'media/example11.png',
                'media/example12.png',
                'media/example13.png',
                'media/example14.png',
                'media/example15.png'
                ])
        ];
    }
}
