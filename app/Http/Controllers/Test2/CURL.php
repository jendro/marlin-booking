<?php
namespace App\Http\Controllers\Test2;

class CURL{

    private static $api_key = "e3d6e178bc5daa9b0e3a094ef68640a6";

    public static function API($url){
        $url = $url;
        $curl = curl_init();
        curl_setopt_array($curl, [
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => ['key: '.self::$api_key],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if($err){
            return false;
        }else{
            return $response;
        }
    }

    public static function API_CEK_ONGKIR($request){
        $url    = $request->url;
        $data   = [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => empty($request->weight)?100:$request->weight,
            'courier' => $request->courier,
            'originType' => 'subdistrict',
            'destinationType' => 'subdistrict',
        ];
        $curl = curl_init();
        curl_setopt_array($curl, [
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_POST => 1,
          CURLOPT_POSTFIELDS => http_build_query($data),
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded",
            "key: e3d6e178bc5daa9b0e3a094ef68640a6"//.self::$api_key,
          ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if($err){
            return false;
        }else{
            return $response;
        }
    }

}