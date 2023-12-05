<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //30.11.23 19:25 
    // protected $fillable =[

    // ];

    // private $nds_amount = 0.12;
    // private $nds;
    // private $price_nds;
    // private $main_photo;

    // protected $appends=[
    //     'nds',
    //     'price_nds',
    //     'main_photo',
    // ];



    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
