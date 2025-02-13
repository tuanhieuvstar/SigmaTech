<?php

namespace Database\Factories;

use App\Models\Laptop;
use Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'category_id' => fake()->randomElement([1, 2]),
        ];
    }
    // public function configure()
    // {
    //     return $this->afterCreating(function (Laptop $laptop) {
    //         $this->fakeLaptopAttributes($laptop);
    //     });
    // }

    // protected function fakeLaptopAttributes(Laptop $laptop)
    // {
    //     // Custom logic cho attributes
    //     $attributes = Attribute::query()->where('id', [1, 2, 3, 4, 5, 6, 7, 8, 9])->get();

    //     foreach ($attributes as $attribute) {
    //         $laptop->attributes()->attach($attribute->id, [
    //             'value' => $this->faker->word(),
    //         ]);
    //     }
    // }
}
