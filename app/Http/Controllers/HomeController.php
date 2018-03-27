<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInfo;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['home_info'] = HomeInfo::first();

        return response()->json($data);
    }
}
