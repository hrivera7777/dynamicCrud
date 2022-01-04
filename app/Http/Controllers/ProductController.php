<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function setGameAttributes($game,Request $request)
    {
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
    }

    public function newGame(Request $request)
    {
        $game = new Product();
        $this->setGameAttributes($game,$request);

        return view('succesful');
    }

    public function viewGames()
    {
        $games = Product::all();
        
        return view('view',['games'=>$games]);
    }

    public function editGame($id)
    {
        $oldGame= Product::where('id', $id)->first();
        return view('edit',['oldGame' =>$oldGame]);
    }

    public function changeGame(Request $request){
        
        $oldGame= Product::where('id', $request->input('idGame'))->first();
        $this->setGameAttributes($oldGame,$request);

        return view('succesful');

    }
}
