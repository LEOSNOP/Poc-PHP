<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
 public function index (){
    return view('welcome');
 }

 public function page2 (){
    return view('pagina2');
 }

    public function loginPage (){
        return view('login');
    }

    public function registerPage (){
        return view('register');
    }
    
}
