<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function redirect()
    {
        $user = Auth::user()->id;

        $file = User::find($user)->file;

        if($file == null)
        {
            return view('dashboard');
        }
        else
        {
            return view ('thanks');
        }
    }
}
