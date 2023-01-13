<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email'    => $this->faker->unique()->safeEmail,
            'phone'    => '011'.$this->faker->unique()->numerify('##########'),
            'password' => Hash::make('password'), // password
        ];
    }
}
