<?php

namespace App\Http\Controllers;

use App\Recruit;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Recruit::paginate(6);
        $flag = true;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = Recruit::find($id);
        return view('Admin.recruitment.edit', compact('item'));
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
        $item = Recruit::find($id);
        $item->update($request->all());
        return redirect('OnlineRecruitment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Saturday()
    {
        $data = Recruit::where('day', 'Saturday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Sunday()
    {
        $data = Recruit::where('day', 'Sunday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Monday()
    {
        $data = Recruit::where('day', 'Monday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Tuesday()
    {
        $data = Recruit::where('day', 'Tuesday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Wednesday()
    {
        $data = Recruit::where('day', 'Wednesday')->paginate(6);
        return view('Admin.recruitment.index', compact('data'));
    }

    public function Thursday()
    {
        $data = Recruit::where('day', 'Thursday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }
}
