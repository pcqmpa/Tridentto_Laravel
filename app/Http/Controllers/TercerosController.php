<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests\CreateTerceroRequest;
use App\tercero;
use Illuminate\Http\Request;

class TercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terceros = tercero::paginate(15);
        return view('admin.terceros',['terceros' => $terceros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('admin.addtercero',['departamentos' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTerceroRequest $request)
    {

        $data = $request->all();

        tercero::create($data);

        return redirect('/terceros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tercero=tercero::find($id);
        $departamentos = Departamento::all();

        return view('admin.edittercero',['departamentos'=>$departamentos,'tercero' => $tercero]);
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
        $tercero = tercero::find($id);

        $data= $request->all();

        $tercero->fill($data);

        $tercero->save();

        return redirect('/terceros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
