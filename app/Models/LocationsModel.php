<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationsModel extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'id_locations';
    protected $fillable = ['name', 'latitude', 'longitude'];
    public $timestamps = true;
}
