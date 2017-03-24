<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateProductoRequest;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();

        return view('admin.productos',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.addproducto',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductoRequest $request)
    {


           $data = $request->all();
           $data['user_id']=Auth::user()->id;
           $data['estado']=1;
           $file = $request->file('file');
           $nombrefile =$file->getClientOriginalName();
           $data['imagen']=$nombrefile;
           \Storage::disk('local')->put($nombrefile,\File::get($file));

           Producto::create($data);
            return redirect('/productos');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        /*Productos relacionado*/
        $listado = Producto::where('categoria_id', $producto->categoria_id , 4)->get();


        return view('admin.showprodcuto',['producto'=>$producto,'listado' => $listado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        $categorias = Categoria::where('estado',1)->get();

        return view('admin.editproducto',['producto'=>$producto,'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductoRequest $request,$id)
    {


        $producto=Producto::find($id);

        $data = $request->all();
        $data['user_id']=Auth::user()->id;
        /*Cargamos la imagen*/
        $file = $request->file('file');
        if($file != null){
            \Storage::delete($producto->imagen);

            $nombrefile =$file->getClientOriginalName();
            $data['imagen']=$nombrefile;
            \Storage::disk('local')->put($nombrefile,\File::get($file));

        }else
        {
            $data['imagen']=$producto->imagen;

        }


        /*Fin Cargar imagen*/
        $producto->fill($data);
        $producto->save();
        return redirect('/productos');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
