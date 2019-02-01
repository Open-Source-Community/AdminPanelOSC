<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\workshop_time;
use App\workshop_day;
use App\slot;
class formController extends Controller
{
    //
    public function settings(){
        return view("Admin.form.settings");
    }

    public function addSlot(Request $req){
        $slot = slot::where('day_id' , $req->day)->where('time_id' , $req->time)->first();
        if(empty($slot)){
            $slot = new slot;
            $slot->day_id = $req->day;
            $slot->time_id = $req->time;
            $slot->slots = $req->slots;
            $slot->save();
        }else {
            $slot->slots = $req->slots;
            $slot->update();
        }
        return redirect('/form/slots');
    }
    public function slots(){
        $times = workshop_time::all();
        $days = workshop_day::all();
        return view("Admin.form.slots", ['times'=>$times , 'days'=>$days]);
    }

    public function getSlot(Request $req){

        $slot = slot::where('day_id' , $req->day)->where('time_id' , $req->time)->first();
        if($slot){
            return response()->json($slot->slots);
        }        
        return response()->json("");
        
    }
}
