<?php

namespace App\Http\Controllers;
//import de arquivos 
use App\Models\Device;
use Device as GlobalDevice;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function list()
    {
        return Device::all();
    }

    public function listID($id = null)
    {
        return $id ? Device::find($id) : Device::all();
    }

    public function add(Request $request)
    {
        $inputs = $request->all();

        Device::create($inputs);
        if ($inputs) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "error"];
        }
    }

    public function update(Request $request, $id)
    {
        $items = Device::findOrFail($id);
        $items->fill($request->all())->save();

        if ($request) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "error"];
        }
    }
    
    public function seach(Request $request, $name)
    {
        $result = Device::where('name', $name);

        if ($result) {
            return ["Result" => "Encontrado",$name];
        } else {
            return ["Result" => "error"];
        }
    }
}
