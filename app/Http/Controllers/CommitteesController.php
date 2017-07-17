<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;
use DB;

class CommitteesController extends Controller
{
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

    public function index()
    {
        $user_data = Committee::all();

        return view('showallcommittees', compact('user_data'));
    }

    public function edit($id)
    {
        $notes = new Committee;
        $notes = $notes->find($id);

        return view('editcommittee', compact('notes'));
    }

    public function update(Request $request, $id)
    {
        $imageurl = $request->input('imageurl');
        $desc = $request->input('description');

        $notes = new Committee;
        $notes = $notes->find($id);

        $notes->update(['imageurl' => $imageurl]);
        $notes->update(['description' => $desc]);

        return view('showallcommittees');
    }

    public function delete($id)
    {
        $notes = new Committee;
        $notes = $notes->find($id);

        $notes->delete();

        return view('showallcommittees');
    }
}
