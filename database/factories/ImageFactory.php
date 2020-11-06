<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source' => 'https://images-na.ssl-images-amazon.com/images/I/81EZn5FzBIL._AC_SL1500_.jpg',
            'gallery_id' => Gallery::inRandomOrder()->first()->id
        ];
    }
}
