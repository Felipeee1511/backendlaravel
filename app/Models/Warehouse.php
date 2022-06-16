<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
   
    protected $fillable = ['name','adress'];

   

    public function Device_at_Warehouse()
    {
        return $this->hasMany('App\Models\Device');
    }
    
}
