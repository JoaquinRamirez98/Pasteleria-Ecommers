<?php

namespace Database\Factories;

use App\Models\imagenes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\imagenes>
 */
class ImagenesFactory extends Factory
{

    protected $model = imagenes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => 'productos/' . $this->faker->imageUrl( 640,400, null, false)
        ];
    }
}
