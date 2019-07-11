<?php

namespace App\Http\Controllers\Test2;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Test2\CURL;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    public function province(Request $request)
    {
        $payload = CURL::API('https://api.rajaongkir.com/starter/province');
        $data_r = json_decode($payload);
        $data = $data_r->rajaongkir->results;
        return view('test-2.option.province',[
            'data_r'=>$data
        ]);
    }

    public function city(Request $request)
    {
        $province = $request->province;
        $payload = CURL::API('https://api.rajaongkir.com/starter/city?province='.$province);
        $data_r = json_decode($payload);
        $data = $data_r->rajaongkir->results;
        return view('test-2.option.city',[
            'data_r'=>$data
        ]);
    }

    

}
