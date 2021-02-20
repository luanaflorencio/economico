<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $post = post::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('post'));
    }
}
