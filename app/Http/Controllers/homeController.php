<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;

class homeController extends Controller
{
    //
    public  function index()
    {
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('home');
            }

            elseif ($usertype == 'admin'){
                return view('dashboard');
            }

            else{
                return redirect()->back();
            }
        }
    }
}
