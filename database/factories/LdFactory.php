<?php

namespace Database\Factories;

use App\Models\Ld;
use Illuminate\Database\Eloquent\Factories\Factory;

class LdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ld::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        return [
            'storename'      =>  $this->faker->storename,
            'name'     =>  $this->faker->unique()->name,
            'gender'    =>  $gender
        ];
    }
}
