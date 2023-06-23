<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use Illuminate\Support\Str;


class Artwork extends Model
{
    use HasFactory;


    public function artist (){
        return $this->belongsTo(Artist::class);
    }

     public static function generateSlug($str){

        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exixts = Artwork::where('slug', $slug)->first();
        $c = 1;
        while($slug_exixts){
            $slug = $original_slug . '-' . $c;
            $slug_exixts = Artwork::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }



}