<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Artwork;


class Artist extends Model
{
    use HasFactory;


    public function artworks(){

        return $this->hasMany(Artwork::class);


    public function museums(){
        return $this->belongsToMany(Museum::class);

    }

    public static function generateSlug($str){

        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exixts = Artist::where('slug', $slug)->first();
        $c = 1;
        while($slug_exixts){
            $slug = $original_slug . '-' . $c;
            $slug_exixts = Artist::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}