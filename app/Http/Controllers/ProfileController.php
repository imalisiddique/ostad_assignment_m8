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

        setcookie(
            "access_token",
            "123-XYZ",
            1,
            "/",
            $_SERVER["SERVER_NAME"],
            false,
            true,
        );
        return response( $data, 200 );
    }
}
