<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;
use Auth;

class CommitteesController extends Controller
{
    public function index()
    {
        $user_data = Committee::paginate(6);
        return view('Admin.committees.index', compact('user_data'));
    }

    public function create()
    {
        return view('Admin.committees.create');
    }

    public function insert(Request $request)
    {
        $title = $request->input('title');

        $title_check = Committee::where(['title' => $title])->get();

        if (count($title_check) > 0) {
            echo 'There is already Exist Committee of ' . $title . ' .... Please Try Again';
        } else {
            $imageurl = $request->input('imageurl');
            $desc = $request->input('description');

            $note = new Committee;
            $note->title = $title;
            $note->imageurl = $imageurl;
            $note->description = $desc;
            $note->save();

            return back();
        }
    }


    public function edit($id)
    {
        if (Auth::user() != null) {
            $notes = new Committee;
            $notes = $notes->find($id);

            return view('editcommittee', compact('notes'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user() != null) {
            $imageurl = $request->input('imageurl');
            $desc = $request->input('description');

            $notes = new Committee;
            $notes = $notes->find($id);

            $notes->update(['imageurl' => $imageurl]);
            $notes->update(['description' => $desc]);

            return redirect('/showallcommittees');
        } else {
            return redirect('/login');
        }
    }

    public function delete($id)
    {
        if (Auth::user() != null) {
            $notes = new Committee;
            $notes = $notes->find($id);

            $notes->delete();

            return redirect('/showallcommittees');
        } else {
            return redirect('/login');
        }
    }
}
