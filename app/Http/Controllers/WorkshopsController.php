<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Workshop::orderBy('day')->orderBy('time')->paginate(6);
        $flag = true;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time1 = 1;
        $time2 = 2;
        $time3 = 3;
        $time4 = 4;
        $time5 = 5;
        $time6 = 6;
        $time7 = 7;

        $day1 = 1;
        $day2 = 2;
        $day3 = 3;
        $day4 = 4;
        $day5 = 5;

        $day = $request->input('day');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Monday($day1, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)) {
                Workshop::create($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day2)
            if ($this->Tuesday($day2, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)) {
                Workshop::create($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day3)
            if ($this->Wednesday($day3, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)) {
                Workshop::create($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day4)
            if ($this->Thursday($day4, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)) {
                Workshop::create($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day5)
            if ($this->Saturday($day5, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)) {
                Workshop::create($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        else
            return redirect('refused');
    }

    public function Monday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();

        if ($time == $time1) {
            if (count($check1) == 2)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 5)
                return false;
            else
                return true;
        } else if ($time == $time6) {
            if (count($check6) == 7)
                return false;
            else
                return true;
        } else if ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Tuesday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();

        if ($time == $time1) {
            if (count($check1) == 2)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 8)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 8)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 8)
                return false;
            else
                return true;
        } else if ($time == $time6) {
            if (count($check6) == 9)
                return false;
            else
                return true;
        } else if ($time == $time7) {
            if (count($check7) == 9)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Wednesday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();

        if ($time == $time1) {
            if (count($check1) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 7)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 6)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 5)
                return false;
            else
                return true;
        } else if ($time == $time6) {
            if (count($check6) == 4)
                return false;
            else
                return true;
        } else if ($time == $time7) {
            if (count($check7) == 6)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Thursday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();

        if ($time == $time1) {
            if (count($check1) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 6)
                return false;
            else
                return true;
        } else if ($time == $time6) {
            if (count($check6) == 5)
                return false;
            else
                return true;
        } else if ($time == $time7) {
            if (count($check7) == 5)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Saturday($day, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7)
    {
        $check1 = Workshop::where('day', $day)->where('time', $time1)->get();
        $check2 = Workshop::where('day', $day)->where('time', $time2)->get();
        $check3 = Workshop::where('day', $day)->where('time', $time3)->get();
        $check4 = Workshop::where('day', $day)->where('time', $time4)->get();
        $check5 = Workshop::where('day', $day)->where('time', $time5)->get();
        $check6 = Workshop::where('day', $day)->where('time', $time6)->get();
        $check7 = Workshop::where('day', $day)->where('time', $time7)->get();

        if ($time == $time1) {
            if (count($check1) == 3)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 3)
                return false;
            else
                return true;
        } else if ($time == $time6) {
            if (count($check6) == 3)
                return false;
            else
                return true;
        } else if ($time == $time7) {
            if (count($check7) == 4)
                return false;
            else
                return true;
        } else
            return false;
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
        $item = Workshop::find($id);
        return view('Admin.workshop.edit', compact('item'));
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
        $item = Workshop::find($id);

        $time1 = 1;
        $time2 = 2;
        $time3 = 3;
        $time4 = 4;
        $time5 = 5;
        $time6 = 6;
        $time7 = 7;

        $day1 = 1;
        $day2 = 2;
        $day3 = 3;
        $day4 = 4;
        $day5 = 5;

        $day = $request->input('day');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Monday($day1, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day2)
            if ($this->Tuesday($day2, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day3)
            if ($this->Wednesday($day3, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day4)
            if ($this->Thursday($day4, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        elseif ($day == $day5)
            if ($this->Saturday($day5, $time, $time1, $time2, $time3, $time4, $time5, $time6, $time7) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('Workshop');
            } else
                return redirect('refused');
        else
            return redirect('refused');
    }

    public function Monday_Day()
    {
        $data = Workshop::where('day', 1)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    public function Tuesday_Day()
    {
        $data = Workshop::where('day', 2)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    public function Wednesday_Day()
    {
        $data = Workshop::where('day', 3)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    public function Thursday_Day()
    {
        $data = Workshop::where('day', 4)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    public function Saturday_Day()
    {
        $data = Workshop::where('day', 5)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.workshop.index', compact('flag', 'data'));
    }

    public function refused()
    {
        return view('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Workshop::find($id);
        $item->delete();
        return back();
    }
}
