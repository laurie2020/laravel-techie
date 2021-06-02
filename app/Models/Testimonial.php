<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable = [
        'texte',
        'personne_id'
    ];

    public function personne(){
        return $this->belongsTo(Personne::class);
    }
}
