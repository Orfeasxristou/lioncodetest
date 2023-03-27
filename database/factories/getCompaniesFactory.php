<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 use App\Models\Testcompanies;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class getCompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::all()->random()->id,
            'name'=>$this->faker->unique()->sentence(),
            'adress'=>$this->faker->text(),
            'phone'=>$this->faker->unique()->numerfiy('##########'),
        ];
    }
}
