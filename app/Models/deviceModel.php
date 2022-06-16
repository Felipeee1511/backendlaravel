<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deviceModel extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function DeviceBrand() 
    {
     return $this->belongsTo('App\Models\Brand');
    }

    public function DeviceModel() 
    {
     return $this->belongsTo('App\Models\Device');
    }

    public function Device_Brand() 
    {
     return $this->belongsTo('App\Models\Device');
    }
   
}
