<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\deviceModel;
use App\Models\Brand; 
use App\Models\Device;
use App\Models\Warehouse;
class DeviceController extends Controller
{
  
    public function index()
    {
        $devices = DB::table('devices')
        ->join('device_models','device_models.id' , '=', 'devices.device_model_id')
        ->join('brands','brands.id' , '=','devices.device_brand_id' )
        ->join('warehouses','warehouses.id','=','devices.device_warehouse_id')      
        ->select('devices.id', 'devices.name','devices.device_warehouse_id','warehouses.name as warehouse_name' ,'brands.id as brand_id','brands.name as brand_device', 'device_models.name as device_model_name','device_models.id as device_model_id', 'devices.created_at', 'devices.updated_at' )
        ->get();

        return $devices;
    }

   
    public function store(Request $request)
    {
        $device = new Device();
        $device->device_brand_id = Brand::pluck('name','id');
        $device->device_model_id = deviceModel::pluck('name','id');
        $device->device_warehouse_id = Warehouse::pluck('name','id');

        $device->name = $request->name;
        $device->device_brand_id= $request->device_brand_id;
        $device->device_model_id= $request->device_model_id;
        $device->device_warehouse_id= $request->device_warehouse_id;
        $device->save();
    }

   
    public function show($id)
    {
        $device = Device::find($id);
        return $device;
    }

 
    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);
        $device->name = $request->name;
        
        $device->save();
        return $device;
    }

  
    public function destroy($id)
    {
        $device = Device::destroy($id);
        return $device;
    }
}
