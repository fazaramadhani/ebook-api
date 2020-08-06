<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118105",
            "Name" => "Nur Haris Faza Ramadhan",
            "Gender" => "Laki-laki",
            "Phone" => "08985181223",
            "Kelas" => "XI RPL 3",
        ];
    }
}
