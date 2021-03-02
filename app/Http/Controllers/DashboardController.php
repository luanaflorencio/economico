<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $post = post::orderBy('created_at', 'desc')->get();
        $user = User::all();
        return view('dashboard', compact('post', 'user'));
    }
}
