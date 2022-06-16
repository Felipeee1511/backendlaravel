<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Warehouse;
class WarehouseController extends Controller
{
   
    public function index()
    {
        $warehouses = Warehouse::all();
        return $warehouses;
    }

    
    public function store(Request $request)
    {
        $warehouse = new Warehouse();
        $warehouse->adress = $request->adress;
        
        $brand->save();
    }

   
    public function show($id)
    {
        $warehouse = Warehouse::find($id);
       return $warehouse;
    }

   
    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->adress = $request->adress;
        $warehouse->save();
        return $warehouse;
    }

   
    public function destroy($id)
    {
        $warehouse = Warehouse::destroy($id);
        return $warehouse;
    }
}
