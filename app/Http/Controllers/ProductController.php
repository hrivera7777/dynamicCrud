<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function newGame(Request $request)
    {
        $game = new Product();
        $game->name = $request->title;

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            
            }
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        
        $game->fileName = $fileNameToStore;

        $game->save();

        return view('succesful');
    }
}
