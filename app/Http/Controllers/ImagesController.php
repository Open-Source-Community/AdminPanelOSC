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

//    public function index()
//    {
//        $user_data = Image::all();
//
//        return view('showallcommittees', compact('user_data'));
//    }
//
//    public function edit($id)
//    {
//        $notes = new Image;
//        $notes = $notes->find($id);
//
//        return view('editcommittee', compact('notes'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $imageurl = $request->input('imageurl');
//
//        $notes = new Image;
//        $notes = $notes->find($id);
//
//        $notes->update(['imageurl' => $imageurl]);
//
//        return redirect('/');
//    }
//
//    public function delete($id)
//    {
//        $notes = new Image;
//        $notes = $notes->find($id);
//
//        $notes->delete();
//
//        return redirect('/');
//    }
}
