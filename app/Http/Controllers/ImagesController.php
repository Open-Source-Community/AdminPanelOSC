<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Auth;

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

    public function index()
    {
        if (Auth::user() != null) {
            $user_data = Image::all();

            return view('showallimages', compact('user_data'));
        } else {
            return redirect('/login');
        }
    }

    public function edit($id)
    {
        if (Auth::user() != null) {
            $notes = new Image;
            $notes = $notes->find($id);

            return view('editimage', compact('notes'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user() != null) {
            $imageurl = $request->input('imageurl');

            $notes = new Image;
            $notes = $notes->find($id);

            $notes->update(['imageurl' => $imageurl]);

            return redirect('/showallimages');
        } else {
            return redirect('/login');
        }
    }

    public function delete($id)
    {
        if (Auth::user() != null) {
            $notes = new Image;
            $notes = $notes->find($id);

            $notes->delete();

            return redirect('/showallimages');
        } else {
            return redirect('/login');
        }
    }
}
