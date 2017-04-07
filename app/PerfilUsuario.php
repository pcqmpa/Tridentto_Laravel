<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    protected $fillable = [
        'user_id','first_name','last_name',
        'phone_number','mobil_number','address',
        'country','departamento_id','municipio_id','commentary','identification'
    ];

    public function municipio(){

        return $this->belongsTo('App\Municipio');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }


}
