<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsMuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++){

            $artist = Artist::inRandomOrder()->first();
            $museum_id = Museum::inRandomOrder()->first()->id;

            $isAlreadyExist = DB::table('artist_museum')
            ->where('artist_id', $artist->id)
            ->where('museum_id', $museum_id)
            ->count(); // query;

            if (!$isAlreadyExist) {
                //e utilizzo il metodo attach()
                $artist->museums()->attach($museum_id);
            }
        }
    }
}
