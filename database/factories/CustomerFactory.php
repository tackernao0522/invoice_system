<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $phone = str_replace('-', '', $this->faker->phoneNumber);
        $address = mb_substr($this->faker->address, 9);

        return [
            'name' => $this->faker->name(),
            'kana' => $this->faker->kanaName,
            'email' => $this->faker->unique()->safeEmail(),
            'postcode' => $this->faker->postcode(),
            'phone' => $phone,
            'address' => $address,
        ];
    }
}
