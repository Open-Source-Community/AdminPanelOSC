<?php

namespace App\Http\Controllers;

use App\Event;
use App\Form;
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
    public function index2()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Saturday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Saturday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Saturday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Saturday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Saturday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);

            return view('showallinterviews', compact('users_data'));
        } else {
            return redirect('/login');
        }
    }
    public function index3()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Sunday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Sunday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Sunday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Sunday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Sunday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);

            return view('showallinterviews', compact('users_data'));
        } else {
            return redirect('/login');
        }
    }
    public function index4()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Monday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Monday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Monday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Monday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Monday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);

            return view('showallinterviews', compact('users_data'));
        } else {
            return redirect('/login');
        }
    }
    public function index5()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Tuesday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Tuesday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Tuesday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Tuesday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Tuesday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);

            return view('showallinterviews', compact('users_data'));
        } else {
            return redirect('/login');
        }
    }
    public function index6()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Wednesday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Wednesday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Wednesday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Wednesday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Wednesday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);
            
            return view('showallinterviews', compact('users_data'));
        } else {
            return redirect('/login');
        }
    }
    public function index7()
    {
        if (Auth::user() != null) {
            $time1 = '10 am to 11.30 am';
            $time2 = '11.30 am to 1 pm';
            $time3 = '1 pm to 2.30 pm';
            $time4 = '2.30 pm to 4 pm';
            $time5 = '4 pm to 5.30 pm';
            
            $users_data1 = Form::where(['day' => 'Thursday'])->where(['time' => $time1])->get();
            $users_data2 = Form::where(['day' => 'Thursday'])->where(['time' => $time2])->get();
            $users_data3 = Form::where(['day' => 'Thursday'])->where(['time' => $time3])->get();
            $users_data4 = Form::where(['day' => 'Thursday'])->where(['time' => $time4])->get();
            $users_data5 = Form::where(['day' => 'Thursday'])->where(['time' => $time5])->get();
            
            $users_data = $users_data1->merge($users_data2)->merge($users_data3)->merge($users_data4)->merge($users_data5);

            return view('showallinterviews', compact('users_data'));
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
