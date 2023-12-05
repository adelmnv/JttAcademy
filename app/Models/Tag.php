<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    //30.11.23 19:25 
    // protected $fillable =[

    // ];

    // private $nds_amount = 0.12;
    // private $nds;
    // private $price_nds;

    // protected $appends=[
    //     'nds',
    //     'price_nds',
    // ];
}
