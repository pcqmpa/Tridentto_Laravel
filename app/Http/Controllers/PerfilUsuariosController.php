<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\PerfilUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Validamos si tenemos datos para cargar*/

        $departamentos = Departamento::all();

        $user_id=Auth::user()->id;

        $datos = PerfilUsuario::where('user_id','=',$user_id)->get();

        if($datos->count() > 0){
            return view('main.editperfilusuario',['departamentos' => $departamentos,'datos' => $datos]);
        }else{
            return view('main.perfilusuario',['departamentos' => $departamentos]);
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $data['user_id']=Auth::user()->id;
        $data['country']='COLOMBIA';
        PerfilUsuario::create($data);
        return redirect('/');

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $miperfil = PerfilUsuario::find($id);

        $data=$request->all();

        $miperfil->fill($data);
        $miperfil->save();

        return redirect('/');
    }

}
