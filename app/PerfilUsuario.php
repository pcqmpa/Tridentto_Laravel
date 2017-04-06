<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    protected $fillable = [
        'user_id','first_name','last_name',
        'phone_number','mobil_number','address',
        'country','departamento_id','municipio_id','commentary'
    ];

}
