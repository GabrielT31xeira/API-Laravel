<?php

namespace App\Http\Controllers;
//import de arquivos 
use App\Models\Device;
use Device as GlobalDevice;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function list()
    {
        return Device::all();
    }

    function listID($id = null)
    {
        return $id ? Device::find($id) : Device::all();
    }

    function add(Request $request)
    {
        $inputs = $request->all();

        Device::create($inputs);
        if ($inputs) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "error"];
        }
    }

    function update(Request $request, $id)
    {
        $items = Device::findOrFail($id);

        $items -> fill($request->all())->save();

        if ($request) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "error"];
        }
    }
}
