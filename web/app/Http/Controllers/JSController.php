<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSController extends Controller
{
    //

    public function handleFile(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the file in the public disk (you can customize the disk as needed)
        $file = $request->file('file');
        $path = $file->store('logos', 'public');

        // Create a new Logo model and store the file path
        // $logo = Logo::create(['logo' => $path]);

        // You can return a response or redirect as needed
        return response()->json(['message' => 'File uploaded successfully', 'logo' => $path]);
    }
}
