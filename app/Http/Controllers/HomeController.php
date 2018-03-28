<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInfo;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'home_info' => HomeInfo::first(),
            'abouts' => About::all(),
            'services' => Service::all(),
            'categories' => Category::all(),
            'blogs' => Post::with('users')->get(),
            'users' => User::with('social_network')->limit(config('parameters.home.our_team_limit'))->get(),
        ];

        return response()->json($data);
    }
}
