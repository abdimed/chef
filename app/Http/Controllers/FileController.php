<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $file = User::find($user)->file;

        if ($file == null) {
            $request->validate([
                'file' => 'required||mimes:mp4,ogx,oga,ogv,ogg,webm'
            ]);
            File::create([
                'user_id' => auth()->user()->id,
                'file' => $request->file('file')->store('videos/' .  auth()->user()->name)
            ]);

            return back();
        }
        else{
            return back();
        }
    }
}
