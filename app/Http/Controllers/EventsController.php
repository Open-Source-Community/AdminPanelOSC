<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Auth;

class EventsController extends Controller
{
    public function insert(Request $request)
    {
        $title = $request->input('title');
        $imageurl = $request->input('imageurl');
        $desc = $request->input('description');

        $note = new Event;
        $note->title = $title;
        $note->imageurl = $imageurl;
        $note->description = $desc;
        $note->save();

        return back();
    }

    public function index()
    {
        if (Auth::user() != null) {
            $user_data = Event::all();

            return view('showallevents', compact('user_data'));
        } else {
            return redirect('/login');
        }
    }

    public function edit($id)
    {
        if (Auth::user() != null) {
            $notes = new Event;
            $notes = $notes->find($id);

            return view('editevent', compact('notes'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user() != null) {
            $title = $request->input('title');
            $imageurl = $request->input('imageurl');
            $desc = $request->input('description');

            $notes = new Event;
            $notes = $notes->find($id);

            $notes->update(['title' => $title]);
            $notes->update(['imageurl' => $imageurl]);
            $notes->update(['description' => $desc]);

            return redirect('/showallevents');
        } else {
            return redirect('/login');
        }
    }

    public function delete($id)
    {
        if (Auth::user() != null) {
            $notes = new Event;
            $notes = $notes->find($id);

            $notes->delete();

            return redirect('/showallevents');
        } else {
            return redirect('/login');
        }
    }
}
