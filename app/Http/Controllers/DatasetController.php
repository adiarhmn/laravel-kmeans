<?php

namespace App\Http\Controllers;

use App\Models\LocationsModel;
use Illuminate\Http\Request;

class DatasetController extends Controller
{
    public function index()
    {
        $locations = LocationsModel::all();
        
        return view('admin.datasets.index', [
            'locations' => $locations
        ]);
    }
}
