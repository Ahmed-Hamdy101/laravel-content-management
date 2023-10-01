<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table = 'catagory';
    protected $fillable  =['name'];
    public function posts(){

  return $this->hasMany(Post::class);
    
    }
}
