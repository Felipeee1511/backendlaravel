<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
   
    public function index()
    {
       $brands = Brand::all();
       return $brands;
    }

 
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        
        $brand->save();
    }

   
    public function show($id)
    {
       $brand = Brand::find($id);
       return $brand;
    }

   
    public function update(Request $request, $id)
    {
       $brand = Brand::findOrFail($id);
       $brand->name = $request->name;
       $brand->save();
       return $brand;
    }

   
    public function destroy($id)
    {
        $brand = Brand::destroy($id);
        return $brand;
    }
}
