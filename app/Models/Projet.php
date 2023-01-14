<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
   // public $timestamps = false;
    protected $guarded = [];
    public function phase(){
        return $this->hasMany(Phase::class);
    }
}
