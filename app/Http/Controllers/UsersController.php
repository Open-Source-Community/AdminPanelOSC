<?php

namespace App\Http\Controllers;

use App\Committee;
use App\Position;
use App\User;
use App\User_committee;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = User::paginate(10);
        return view('Admin.users.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $committees = Committee::all();
        $positions = Position::all();
        return view('Admin.users.create', compact('positions', 'committees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['password'] = bcrypt($request->user_password);
        $item = User::create($request->all());
        foreach ($request->committee_ids as $committee_id) {
            $user_committe = new User_committee();
            $user_committe->committee_id = $committee_id;
            $user_committe->user_id = $item->id;
            $user_committe->save();
        }
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $item = User::find($id);
        $positions = Position::all();
        return view('Admin.users.edit', compact('item', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::find($id);
        $item->update($request->all());
        User_committee::where('user_id', $id)->delete();
        foreach ($request->committee_ids as $committee_id) {
            $user_committe = new User_committee();
            $user_committe->committee_id = $committee_id;
            $user_committe->user_id = $item->id;
            $user_committe->save();
        }
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect('users');
    }
}
