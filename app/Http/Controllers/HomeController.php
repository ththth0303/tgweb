<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInfo;
use App\Models\About;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['home_info'] = HomeInfo::first();
        $data['abouts'] = About::all();
        $data['services'] = Service::all();

        return response()->json($data);
    }
}
