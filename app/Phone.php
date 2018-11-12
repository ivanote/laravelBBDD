<?php

namespace App;
use App\Caracteristica;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function caracteristicas()
    {
        return $this->hasOne(Caracteristica::class);
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number','user_id'
    ];
}
