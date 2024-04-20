<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\productmodel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productId = productmodel::factory()->create([
            
            // 'proName' => 'Energy Saver (MICHELIN)',
            // 'price' => '4846',
            // 'description' => 'aaaaaaaaaaaaa',
            // 'category' => 'Tire',
        ]);
        // $imagePath = 'public/images/1713381040.png';
        // $imageName = 'image_'. time(). '.jpg';
        // Storage::putFileAs('public/images', new \Illuminate\Http\UploadedFile($imagePath, $imageName, null, null, true), $imageName);

        // $product = productmodel::find($productId);
        // $product->image = 'images/'. $imageName;
        // $product->save();

        \App\Models\productmodel::factory(8)->create(['category' => 'Tire']);
        \App\Models\productmodel::factory(8)->create(['category' => 'Oil']);
        \App\Models\productmodel::factory(8)->create(['category' => 'Engine']);
        \App\Models\productmodel::factory(8)->create(['category' => 'Battary']);
        \App\Models\productmodel::factory(8)->create(['category' => 'ABS']);
    }
}