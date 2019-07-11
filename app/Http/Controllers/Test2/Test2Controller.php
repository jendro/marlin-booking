<?php

namespace App\Http\Controllers\Test2;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Test2\CURL;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    
    public function index()
    {
        return view('test-2.index',[
            'menu'=>'test_2'
        ]);
    }

    public function hitungOngkir(Request $request)
    {
        $request->origin = 501; // Yogyakarta
        $request->url = "https://api.rajaongkir.com/starter/cost";
        $payload = CURL::API_CEK_ONGKIR($request);
        $data_r = json_decode($payload);
        $data = $data_r->rajaongkir->results[0]->costs;
        return view('test-2.hasil',[
            'data_r'=>$data
        ]);
    }
    

}
