<?php

namespace App;

use App;
use App\User;

use Illuminate\Database\Eloquent\Model;


class Pelicula extends Model
{
    protected $fillable = ['numero','origen','destino'];



    public function user()
	{
		return $this->belongsTo(User::class);
	}
}


//una pelicula pertece a        muchos usuarios    
// user_id en peli