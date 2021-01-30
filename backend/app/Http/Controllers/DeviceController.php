<?php

namespace App\Http\Controllers;
//import de arquivos 
use App\Models\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function list()
    {
        return Device::all();
    }
}
