<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRatingController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $ratings = $user->ratings()->get();

        return view('ratings.history', compact('ratings'));
    }
}
