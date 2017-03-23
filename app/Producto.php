<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Categoria;

class Producto extends Model
{
    protected $table='productos';
    protected $fillable=['referencia','titulo','descripcion','categoria_id','precio','imagen','oferta','estado','user_id'];


   /* public function setPathAttribute($file){

        $this->attributes['imagen']=Carbon::now()->second.$imagen->getClientOriginalName();
        $name=Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($file));

        return $name;
    }*/

    public function categoria(){

        return $this->belongsTo('App\Categoria');

    }



}
