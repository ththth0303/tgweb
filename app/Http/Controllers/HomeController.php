<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInfo;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'home_info' => HomeInfo::first(),
            'abouts' => About::all(),
            'services' => Service::all(),
            'categories' => Category::all(),
        ];

        return response()->json($data);
    }
}
