<?php

//apenas um teste de rota.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData()
    {
        return ["nome"=>"Rafael"];
    }
}
