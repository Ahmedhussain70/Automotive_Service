<?php

namespace Database\Factories;

use App\Models\productmodel; // Import the ProductModel class
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductModel>
 */
class productmodelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productmodel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),
            'proName' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category' => $this->faker->sentence(),
        ];
    }

    /**
     * Configure the factory.
     *
     * @return $this
     */
    // public function configure()
    // {
    //     return $this->afterCreating(function (productmodel $product) {
    //         $imagePath = Storage::disk('local')->path('images/1713381040.png');
    //         $imageName = 'image_'. time(). '.png';
    //         Storage::putFileAs('public/images', new UploadedFile($imagePath, $imageName, null, null, true), $imageName);
    //         $product->image = 'images/'. $imageName;
    //         $product->save();
    //     });
    // }
}