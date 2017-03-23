<?php
/**
 * Created by PhpStorm.
 * User: pquintero
 * Date: 22/03/2017
 * Time: 10:55 AM
 */

namespace App\Http\Controllers;


class AdminController {

    public function index(){

        return view('admin.menu');
    }

}