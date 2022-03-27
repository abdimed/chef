<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        File::create([
            'user_id' => auth()->user()->id,
            'file' => $request->file('file')->store('videos/' .  auth()->user()->name)
        ]);

        return back();
    }
}
