<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'user_id' => User::inRandomOrder()->first()->id,
            'type' => ucwords(fake()->sentence()),
            'date_bill' => fake()->dateTimeBetween('-20 days', now()),
            'nominal' => fake()->numerify('#####'),
            //'is_pay' => rand(0, 1),
            //'is_late' => rand(0, 1)
        ];
    }
}
