<?php

namespace App\Http\Controllers;

use Auth;
use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateNewParticiple');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $day1 = 'Saturday';
        $day2 = 'Sunday';
        $day3 = 'Monday';
        $day4 = 'Tuesday';
        $day5 = 'Wednesday';
        $day6 = 'Thursday';
        $day7 = 'Saturday 7/10/2017';
        $day8 = 'Sunday 8/10/2017';
        
        $time1 = '10 am to 11 am';
        $time2 = '11 am to 12 pm';
        $time3 = '12 pm to 1 pm';
        $time4 = '1 pm to 2 pm';
        $time5 = '2 pm to 3 pm';
        $time6 = '3 pm to 4 pm';
        $time7 = '4 pm to 5 pm';
        
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $contact_no = $request->input('contact_no');
        $year = $request->input('year');
        $homepage_select_workshop = $request->input('homepage_select_workshop');
        $day = $request->input('day');
        $time = $request->input('time');

        $Saturday_check1 = Workshop::where(['day' => $day1])->where(['time' => $time1])->get();
        $Saturday_check2 = Workshop::where(['day' => $day1])->where(['time' => $time2])->get();
        $Saturday_check3 = Workshop::where(['day' => $day1])->where(['time' => $time3])->get();
        $Saturday_check4 = Workshop::where(['day' => $day1])->where(['time' => $time4])->get();
        $Saturday_check5 = Workshop::where(['day' => $day1])->where(['time' => $time5])->get();
        $Saturday_check6 = Workshop::where(['day' => $day1])->where(['time' => $time6])->get();
        $Saturday_check7 = Workshop::where(['day' => $day1])->where(['time' => $time7])->get();
        
        $Sunday_check1 = Workshop::where(['day' => $day2])->where(['time' => $time1])->get();
        $Sunday_check2 = Workshop::where(['day' => $day2])->where(['time' => $time2])->get();
        $Sunday_check3 = Workshop::where(['day' => $day2])->where(['time' => $time3])->get();
        $Sunday_check4 = Workshop::where(['day' => $day2])->where(['time' => $time4])->get();
        $Sunday_check5 = Workshop::where(['day' => $day2])->where(['time' => $time5])->get();
        $Sunday_check6 = Workshop::where(['day' => $day2])->where(['time' => $time6])->get();
        $Sunday_check7 = Workshop::where(['day' => $day2])->where(['time' => $time7])->get();
        
        $Monday_check1 = Workshop::where(['day' => $day3])->where(['time' => $time1])->get();
        $Monday_check2 = Workshop::where(['day' => $day3])->where(['time' => $time2])->get();
        $Monday_check3 = Workshop::where(['day' => $day3])->where(['time' => $time3])->get();
        $Monday_check4 = Workshop::where(['day' => $day3])->where(['time' => $time4])->get();
        $Monday_check5 = Workshop::where(['day' => $day3])->where(['time' => $time5])->get();
        $Monday_check6 = Workshop::where(['day' => $day3])->where(['time' => $time6])->get();
        $Monday_check7 = Workshop::where(['day' => $day3])->where(['time' => $time7])->get();
        
        $Tuesday_check1 = Workshop::where(['day' => $day4])->where(['time' => $time1])->get();
        $Tuesday_check2 = Workshop::where(['day' => $day4])->where(['time' => $time2])->get();
        $Tuesday_check3 = Workshop::where(['day' => $day4])->where(['time' => $time3])->get();
        $Tuesday_check4 = Workshop::where(['day' => $day4])->where(['time' => $time4])->get();
        $Tuesday_check5 = Workshop::where(['day' => $day4])->where(['time' => $time5])->get();
        $Tuesday_check6 = Workshop::where(['day' => $day4])->where(['time' => $time6])->get();
        $Tuesday_check7 = Workshop::where(['day' => $day4])->where(['time' => $time7])->get();
        
        $Wednesday_check1 = Workshop::where(['day' => $day5])->where(['time' => $time1])->get();
        $Wednesday_check2 = Workshop::where(['day' => $day5])->where(['time' => $time2])->get();
        $Wednesday_check3 = Workshop::where(['day' => $day5])->where(['time' => $time3])->get();
        $Wednesday_check4 = Workshop::where(['day' => $day5])->where(['time' => $time4])->get();
        $Wednesday_check5 = Workshop::where(['day' => $day5])->where(['time' => $time5])->get();
        $Wednesday_check6 = Workshop::where(['day' => $day5])->where(['time' => $time6])->get();
        $Wednesday_check7 = Workshop::where(['day' => $day5])->where(['time' => $time7])->get();
        
        $Thursday_check1 = Workshop::where(['day' => $day6])->where(['time' => $time1])->get();
        $Thursday_check2 = Workshop::where(['day' => $day6])->where(['time' => $time2])->get();
        $Thursday_check3 = Workshop::where(['day' => $day6])->where(['time' => $time3])->get();
        $Thursday_check4 = Workshop::where(['day' => $day6])->where(['time' => $time4])->get();
        $Thursday_check5 = Workshop::where(['day' => $day6])->where(['time' => $time5])->get();
        $Thursday_check6 = Workshop::where(['day' => $day6])->where(['time' => $time6])->get();
        $Thursday_check7 = Workshop::where(['day' => $day6])->where(['time' => $time7])->get();
        
        $Saturday2_check1 = Workshop::where(['day' => $day7])->where(['time' => $time1])->get();
        $Saturday2_check2 = Workshop::where(['day' => $day7])->where(['time' => $time2])->get();
        $Saturday2_check3 = Workshop::where(['day' => $day7])->where(['time' => $time3])->get();
        $Saturday2_check4 = Workshop::where(['day' => $day7])->where(['time' => $time4])->get();
        $Saturday2_check5 = Workshop::where(['day' => $day7])->where(['time' => $time5])->get();
        $Saturday2_check6 = Workshop::where(['day' => $day7])->where(['time' => $time6])->get();
        $Saturday2_check7 = Workshop::where(['day' => $day7])->where(['time' => $time7])->get();
        
        $Sunday2_check1 = Workshop::where(['day' => $day8])->where(['time' => $time1])->get();
        $Sunday2_check2 = Workshop::where(['day' => $day8])->where(['time' => $time2])->get();
        $Sunday2_check3 = Workshop::where(['day' => $day8])->where(['time' => $time3])->get();
        $Sunday2_check4 = Workshop::where(['day' => $day8])->where(['time' => $time4])->get();
        $Sunday2_check5 = Workshop::where(['day' => $day8])->where(['time' => $time5])->get();
        $Sunday2_check6 = Workshop::where(['day' => $day8])->where(['time' => $time6])->get();
        $Sunday2_check7 = Workshop::where(['day' => $day8])->where(['time' => $time7])->get();
        
        if ($day == $day1){
            if ($time == $time1){
                if (count($Saturday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Saturday_check2) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Saturday_check3) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Saturday_check4) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Saturday_check5) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Saturday_check6) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Saturday_check7) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
        elseif ($day == $day2){
            if ($time == $time1){
                if (count($Sunday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Sunday_check2) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Sunday_check3) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Sunday_check4) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Sunday_check5) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Sunday_check6) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Sunday_check7) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
        elseif ($day == $day3){
            if ($time == $time1){
                if (count($Monday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Monday_check2) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Monday_check3) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Monday_check4) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Monday_check5) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Monday_check6) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Monday_check7) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
        elseif ($day == $day4){
            if ($time == $time1){
                if (count($Tuesday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Tuesday_check2) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Tuesday_check3) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Tuesday_check4) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Tuesday_check5) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Tuesday_check6) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Tuesday_check7) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
        elseif ($day == $day5){
            if ($time == $time1){
                if (count($Wednesday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Wednesday_check2) > 6)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Wednesday_check3) > 7)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Wednesday_check4) > 7)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Wednesday_check5) > 8)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Wednesday_check6) > 8)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Wednesday_check7) > 8)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
        elseif ($day == $day6){
            if ($time == $time1){
                if (count($Thursday_check1) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
            elseif ($time == $time2){
                if (count($Thursday_check2) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time3){
                if (count($Thursday_check3) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time4){
                if (count($Thursday_check4) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time5){
                if (count($Thursday_check5) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time6){
                if (count($Thursday_check6) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
             elseif ($time == $time7){
                if (count($Thursday_check7) > 4)
                    return view('welcome');
                else
                {
                    $workshop = new Workshop;
                    $workshop->first_name = $first_name;
                    $workshop->last_name = $last_name;
                    $workshop->email = $email;
                    $workshop->contact_no = $contact_no;
                    $workshop->faculty = 'cisAinShams';
                    $workshop->blenderTask = '';
                    $workshop->year = $year;
                    $workshop->homepage_select_workshop = $homepage_select_workshop;
                    $workshop->day = $day;
                    $workshop->time = $time;
                    $workshop->save();

                    return back();
                }
            }
        }
    }

    public function indexSaturday()
    {
        if (Auth::user() != null) {
            
            $day = 'Saturday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexSunday()
    {
        if (Auth::user() != null) {
            
            $day = 'Sunday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexMonday()
    {
        if (Auth::user() != null) {
            
            $day = 'Monday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexTuesday()
    {
        if (Auth::user() != null) {
            
            $day = 'Tuesday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexWednesday()
    {
        if (Auth::user() != null) {
            
            $day = 'Wednesday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexThursday()
    {
        if (Auth::user() != null) {
            
            $day = 'Thursday';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
     public function indexSaturday_7_10_2017()
    {
        if (Auth::user() != null) {
            
            $day = 'Saturday7/10/2017';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    public function indexSunday_8_10_2017()
    {
        if (Auth::user() != null) {
            
            $day = 'Sunday8/10/2017';
            $time1 = '10 am to 11 am';
            $time2 = '11 am to 12 pm';
            $time3 = '12 pm to 1 pm';
            $time4 = '1 pm to 2 pm';
            $time5 = '2 pm to 3 pm';
            $time6 = '3 pm to 4 pm';
            $time7 = '4 pm to 5 pm';

            $check1 = Workshop::where(['day' => $day])->where(['time' => $time1])->get();
            $check2 = Workshop::where(['day' => $day])->where(['time' => $time2])->get();
            $check3 = Workshop::where(['day' => $day])->where(['time' => $time3])->get();
            $check4 = Workshop::where(['day' => $day])->where(['time' => $time4])->get();
            $check5 = Workshop::where(['day' => $day])->where(['time' => $time5])->get();
            $check6 = Workshop::where(['day' => $day])->where(['time' => $time6])->get();
            $check7 = Workshop::where(['day' => $day])->where(['time' => $time7])->get();
            
            $check = $check1->merge($check2)->merge($check3)->merge($check4)->merge($check5)->merge($check6)->merge($check7);

            return view('showallinterviewsworkshops', compact('check'));
        } else {
            return redirect('/login');
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function delete($id)
    {
        if (Auth::user() != null) {
            $notes = new Workshop;
            $notes = $notes->find($id);

            $notes->delete();

            return back();
        } else {
            return redirect('/login');
        }
    }
}
