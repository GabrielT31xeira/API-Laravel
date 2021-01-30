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
    function listID($id = null)
    {
        return $id?Device::find($id):Device::all();
    }
}
