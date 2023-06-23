<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Artwork;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $new_artwork = new Artwork();

            // Ensure that the name is unique and less than or equal to 50 characters
            do {
                $name = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true);
            } while (strlen($name) > 50);

            $new_artwork->name = $name;
            $new_artwork->slug = Str::slug($name);

            // Assuming Artwork belongs to Artist
            $random_artist = Artist::inRandomOrder()->first();
            $new_artwork->artist_id = $random_artist->id;

            $new_artwork->save();
        }
    }
}