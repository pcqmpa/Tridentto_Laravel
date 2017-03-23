<?php
/**
 * Created by PhpStorm.
 * User: pquintero
 * Date: 21/03/2017
 * Time: 1:03 PM
 */

namespace App\Http\Controllers;


class MainController {

        public function home(){

            return view('main.home');

        }
}