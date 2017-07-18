<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function insert(Request $request)
    {
        $title = $request->input('title');
        $imageurl = $request->input('imageurl');
        $desc = $request->input('description');

//        $note = new Event;
//        $note->title = $title;
//        $note->imageurl = $imageurl;
//        $note->description = $desc;
//        $note->save();
//
//        return back();

        echo bcrypt($title);
    }

    public function index()
    {
        $user_data = Event::all();

        return view('showallevents', compact('user_data'));
    }

    public function edit($id)
    {
        $notes = new Event;
        $notes = $notes->find($id);

        return view('editevent', compact('notes'));
    }

    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $imageurl = $request->input('imageurl');
        $desc = $request->input('description');

        $notes = new Event;
        $notes = $notes->find($id);

        $notes->update(['title' => $title]);
        $notes->update(['imageurl' => $imageurl]);
        $notes->update(['description' => $desc]);

        return redirect('/showallevents');
    }

    public function delete($id)
    {
        $notes = new Event;
        $notes = $notes->find($id);

        $notes->delete();

        return redirect('/showallevents');
    }
}
