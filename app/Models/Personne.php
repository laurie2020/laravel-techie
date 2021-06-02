<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table = 'personnes';

    protected $fillable = [
        'photo',
        'nom',
        'prenom',
        'profession'
    ];

    public function testimonial(){
        return $this->hasOne(Testimonial::class);
    }
}
