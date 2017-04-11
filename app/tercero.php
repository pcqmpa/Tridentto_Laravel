<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tercero extends Model
{
    protected $fillable= ['identificacion','empresa','nombre','apellido','telefono',
        'celular','direccion','departamento_id','municipio_id','email','tipo_documento_id'
    ];


    public function municipio(){

        return $this->belongsTo('App\Municipio');

    }

    public function departamento(){

        return $this->belongsTo('App\Departamento');
    }


}
