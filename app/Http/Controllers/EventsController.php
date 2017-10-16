<?php

namespace App\Http\Controllers;

use App\Event;
use App\Form;
use Illuminate\Http\Request;
use Auth;

class EventsController extends Controller
{
    public function index()
    {
        $user_data = Event::paginate(10);
        return view('Admin.events.index', compact('user_data'));
    }

    public function create()
    {
        return view('Admin.events.create');
    }

    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect("events");
    }

    public function edit($id)
    {
        $item = Event::find($id);
        return view('Admin.events.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Event::find($id);
        $item->update($request->all());
        return redirect("events");
    }

    public function destroy($id)
    {
        $item = Event::find($id);
        $item->delete();
        return redirect("events");
    }
}
