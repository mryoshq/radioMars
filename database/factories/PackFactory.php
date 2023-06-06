<?php

namespace Database\Factories;

use App\Models\Pack;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pack::class;

    /**
     * Define the model's default state.
     *
     * @return array 
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'spots_number' => $this->faker->numberBetween(1, 10),
            'days_of_week' => json_encode($this->faker->randomElements(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], $this->faker->numberBetween(1, 7))),
            'times_of_day' => json_encode($this->faker->randomElements(['07:25:00', '10:25:00', '14:55:00', '17:25:00', '19:10:00'], $this->faker->numberBetween(1, 5))),
            'availability' => $this->faker->boolean,
        ];
    }
}
