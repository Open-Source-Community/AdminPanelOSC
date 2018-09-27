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
        $data = Recruit::orderBy('day')->orderBy('time')->paginate(6);
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

        $time1 = 1;
        $time2 = 2;
        $time3 = 3;
        $time4 = 4;
        $time5 = 5;

        $day1 = 1;
        $day2 = 2;
        $day3 = 3;
        $day4 = 4;
        $day5 = 5;
        $day6 = 6;

        $day = $request->input('day');
        $time = $request->input('time');

        if ($day == $day1)
            if ($this->Saturday($day1, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        elseif ($day == $day2)
            if ($this->Sunday($day2, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        elseif ($day == $day3)
            if ($this->Monday($day3, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        elseif ($day == $day4)
            if ($this->Tuesday($day4, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        elseif ($day == $day5)
            if ($this->Wednesday($day5, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        elseif ($day == $day6)
            if ($this->Thursday($day6, $time, $time1, $time2, $time3, $time4, $time5) || ($item->day == $day && $item->time == $time)) {
                $item->update($request->all());
                return redirect('OnlineRecruitment');
            } else
                return redirect('refused');
        else
            return redirect('refused');
    }

    public function Saturday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Sunday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Monday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Tuesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 5)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Wednesday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    public function Thursday($day, $time, $time1, $time2, $time3, $time4, $time5)
    {
        $check1 = Recruit::where('day', $day)->where('time', $time1)->get();
        $check2 = Recruit::where('day', $day)->where('time', $time2)->get();
        $check3 = Recruit::where('day', $day)->where('time', $time3)->get();
        $check4 = Recruit::where('day', $day)->where('time', $time4)->get();
        $check5 = Recruit::where('day', $day)->where('time', $time5)->get();

        if ($time == $time1) {
            if (count($check1) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time2) {
            if (count($check2) == 5)
                return false;
            else
                return true;
        } elseif ($time == $time3) {
            if (count($check3) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time4) {
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        } else
            return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Recruit::find($id);
        $item->delete();
        return back();
    }

    public function Saturday_Day()
    {
        $data = Recruit::where('day', 1)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Sunday_Day()
    {
        $data = Recruit::where('day', 2)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Monday_Day()
    {
        $data = Recruit::where('day', 3)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Tuesday_Day()
    {
        $data = Recruit::where('day', 4)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Wednesday_Day()
    {
        $data = Recruit::where('day', 5)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Thursday_Day()
    {
        $data = Recruit::where('day', 6)->orderBy('time')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function refused()
    {
        return view('welcome');
    }
}
