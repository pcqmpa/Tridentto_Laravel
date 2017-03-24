<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil=Auth::user()->perfil_id;

        if($perfil == 1){
            return view('admin.menu');
        }else
        {
            $prodcutos = Producto::where('estado',1)->get();
            return view('main.home',['productos'=>$prodcutos]);
        }


    }
}
