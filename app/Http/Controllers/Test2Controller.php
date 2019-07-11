<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    
    public function index()
    {
        return view('test-2.index',[
            'menu'=>'test_2'
        ]);
    }

    public function process()
    {

    }

}
