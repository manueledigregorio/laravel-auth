<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tecnology extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug', 'description', 'version'];

    public static function generateSlug($string){

        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Tecnology::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Tecnology::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
