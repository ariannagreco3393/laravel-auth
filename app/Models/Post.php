<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'cover_image'];

    //funzione per creare lo slug --> la logica sarebbe meglio metterla nel model piuttosto che nel controller
    public static function generateSlug($title) {
        return Str::slug($title, '-');
    }
}
