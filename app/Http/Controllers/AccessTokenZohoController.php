<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessTokenZohoController extends Controller {

    public static function access_token() {
        $post = [
            "refresh_token" => "1000.260fd88a109259e422e6b206ce253b89.e51a3797b8e2c184226949e0977950bf",
            "client_id" => "1000.2ZZIQIUTA18IAEY8NAEI9D6HO9VDRE",
            "client_secret" => "98a7779abc2ced6e6cd840b6e19309b3413128d8fd",
            "grant_type" => "refresh_token"
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.eu/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type application/x-www-form-urlencoded'));
        $responce = curl_exec($ch);
        
        return json_decode($responce, true)['access_token'];
        
    }

}


