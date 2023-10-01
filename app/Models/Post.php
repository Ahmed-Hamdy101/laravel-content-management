<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable  =['title' , 'content','image','catagory_id'];

public function catagory(){

 return $this->belongsTo(Catagory::class);


}
}
