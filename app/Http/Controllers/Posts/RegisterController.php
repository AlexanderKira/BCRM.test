<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index'); 
    }

    public function store(){
        return 'запрос на регистрацию';
    }
     
}
