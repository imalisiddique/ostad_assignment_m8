<?php

namespace App\Http\Controllers;

class ProfileController extends Controller {
    //
    public function index( $id ) {

        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id"   => $id,
            "name" => $name,
            "age"  => $age,
        ];

        $cname = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;

        return response( $data )->cookie( $cname, $value, $minutes, $path, $domain, $secure, $httpOnly );

    }
}
