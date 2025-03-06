<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    protected $fillable = [
        'name',
        'skill',
        'bio',
        'dojo_id'
    ];
    use HasFactory;
    public function dojo(){
      return  $this->belongsTo(Dojo::class);
    }
}
