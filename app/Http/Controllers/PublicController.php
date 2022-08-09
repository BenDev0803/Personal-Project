<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function staffDetail($id){
        $staff = [
            ["id" => 1, "name" => "Federico", "surname" => "Stravecchio", "age" => 34, "role" => "Riprese"],
            ["id" => 2, "name" => "Gianni", "surname" => "De Girolamo", "age" => 32, "role" => "Luci"],
            ["id" => 3, "name" => "Valentina", "surname" => "Brambilla", "age" => 30, "role" => "Visual Effects"],
            ["id" => 4, "name" => "Stephanie", "surname" => "Smith", "age" => 29, "role" => "3D Art"],
            ["id" => 5, "name" => "Jason", "surname" => "Connors", "age" => 37, "role" => "Makeup"],
            ["id" => 6, "name" => "Lisa", "surname" => "Baker", "age" => 35, "role" => "Stylist"],
            ["id" => 7, "name" => "Paola", "surname" => "Hernandez", "age" => 34, "role" => "Regia"],
        ];
        
        foreach($staff as $taff){
            if($taff["id"] == $id ){
            
                return view("dettagli-staff" , ["taff" => $taff]);
            }
        }
    }
}
