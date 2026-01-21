<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $count = 0;
        $count++;
        
        return [
            'name'   => $this->faker->name(),
            'job'    => $this->faker->jobTitle(),
            'phone' => $this->faker->numerify('08#########'),
            'email'  => "guardian{$count}@example.com",
            'address'=> $this->faker->address(),
        ];
    }
}
