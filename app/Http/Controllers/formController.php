<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\workshop_time;
use App\workshop_day;
use App\slot;
use SebastianBergmann\Environment\Console;

class formController extends Controller
{
    //
    public function settings(){
        $times = workshop_time::all();
        $days = workshop_day::all();
        return view("Admin.form.settings", ['times'=>$times , 'days'=>$days]);
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
    public function editSetting(Request $req){
        $day = workshop_day::find( $req->DAY);
        $arraytime = $req->TIME; 
        $Time= implode(",",$arraytime);
        $day->times=$Time;
        $day->update();
        return redirect('/form/settings');
    }
    public function addSetting(Request $req){
        $day = new workshop_day;
        // echo $req->DAYADD;
        $day->day = $req->DAYADD;
        $day->date =$req->DATE; 
        $arraytime = $req->TIMEADD;
        $day->times= implode(",",$arraytime);
        $day->save();
        return redirect('/form/settings');
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
    public function getday(Request $req){
        
        $day = workshop_day::find( $req->day);
        $Dbtimes = workshop_time::all();
        $options="";
        if($day){
            $count=0;
            $times  = explode("," , $day->times);
            array_push($times,"1");
            foreach ($Dbtimes as $time) {
                if($time->time == $times[$count]){
                    $options .="<option value='".$time->time."' selected>".$time->time."</option>";
                    
                    $count++;
                    
                }else{
                    $options .="<option value='".$time->time."'>".$time->time."</option>";
                }
                 
            }
            return response($options)->header("Content-Type" , "text/html");
        }        
        return response()->json("");
        
    }
}
