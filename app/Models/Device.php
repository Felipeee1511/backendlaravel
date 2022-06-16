<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function Device_Model() 
    {
        return $this->belongsTo('App\Models\deviceModel');
    }

    public function Device_Brand() 
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function Warehouse()
    {
        return $this->belongsTo('App\Models\Warehouse');
    }
}
