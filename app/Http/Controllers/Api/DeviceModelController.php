<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\deviceModel;
use App\Models\Brand; 

class DeviceModelController extends Controller
{
  
    public function index()
    {
       
        $deviceModels = DB::table('device_models')
                            ->join('brands', 'device_models.brand_id', '=', 'brands.id')
                            ->select('device_models.id', 'device_models.name', 'brands.name as brand_device','brands.id as brand_id', 'device_models.created_at', 'device_models.updated_at')
                            ->get();
                            
        return $deviceModels;
    }

    
    public function store(Request $request)
    {
        $deviceModel = new deviceModel();
        $deviceModel->brand_id = Brand::pluck('name','id');

        $deviceModel->name = $request->name;
        $deviceModel->brand_id = $request->brand_id;
        $deviceModel->save();

    }

   
    public function show($id)
    {
        $deviceModel = deviceModel::find($id);
        return $deviceModel;
    }

  
    public function update(Request $request, $id)
    {
        $deviceModel = deviceModel::findOrFail($id);
        $deviceModel->name = $request->name;
 
        $deviceModel->save();
        return $deviceModel;
    }

 
    public function destroy($id)
    {
        $deviceModel = deviceModel::destroy($id);
        return $deviceModel;
    }
}
