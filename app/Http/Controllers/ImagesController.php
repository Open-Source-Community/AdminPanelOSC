<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function insert(Request $request)
    {
        $title = $request->input('comm_name');

        $imageurl = $request->input('imageurl');

        $note = new Image;
        $note->imageurl = $imageurl;
        $note->comm_name = $title;
        $note->save();

        return back();
    }
}
