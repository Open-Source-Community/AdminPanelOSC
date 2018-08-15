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

        $time1 = 'from 10:00 to 11:30';
        $time2 = 'from 11:30 to 01:00';
        $time3 = 'from 01:00 to 02:30';
        $time4 = 'from 02:30 to 04:00';
        $time5 = 'from 04:00 to 05:30';

        $day1 = 'Saturday';
        $day2 = 'Sunday';
        $day3 = 'Monday';
        $day4 = 'Tuesday';
        $day5 = 'Wednesday';
        $day6 = 'Thursday';

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
        }
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
        }
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
        }
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
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
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
            if (count($check4) == 4)
                return false;
            else
                return true;
        } elseif ($time == $time5) {
            if (count($check5) == 4)
                return false;
            else
                return true;
        }
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
        }
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

    public function Saturday_Day()
    {
        $data = Recruit::where('day', 'Saturday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Sunday_Day()
    {
        $data = Recruit::where('day', 'Sunday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Monday_Day()
    {
        $data = Recruit::where('day', 'Monday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Tuesday_Day()
    {
        $data = Recruit::where('day', 'Tuesday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function Wednesday_Day()
    {
        $data = Recruit::where('day', 'Wednesday')->paginate(6);
        return view('Admin.recruitment.index', compact('data'));
    }

    public function Thursday_Day()
    {
        $data = Recruit::where('day', 'Thursday')->paginate(6);
        $flag = false;
        return view('Admin.recruitment.index', compact('flag', 'data'));
    }

    public function refused()
    {
        return view('welcome');
    }
}
