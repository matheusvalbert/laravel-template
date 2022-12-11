<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos'; 
    use HasFactory;
    public function users(){
        return $this->belongsTomany('App\Models\User');
    }

}
