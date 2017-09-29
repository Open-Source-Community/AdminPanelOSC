@extends('layouts.app')

@section('content')
   
<table style="margin-left: 4cm;" class="ttt">
<tr class="ttt">
    <th class="ttt">Firstname</th>
    <th class="ttt">Lastname</th>
    <th class="ttt">Email</th>
    <th class="ttt">Mobile Number</th>
    <th class="ttt">Year</th>
    <th class="ttt">Workshop</th>
    <th class="ttt">Task</th>
    <th class="ttt">Day</th>
    <th class="ttt">Time</th>
  </tr>
  
      @foreach($check as $user_details)    
    <tr>
            <td class="ttt">
                {{ $user_details->first_name }}
            </td>
       <td class="ttt">
                {{ $user_details->last_name }}
            </td>
       <td class="ttt">
                {{ $user_details->email }}
            </td>
      <td class="ttt">
                {{ $user_details->contact_no }}
            </td>
        <td class="ttt">
                {{ $user_details->year }}
            </td>
        <td class="ttt">
                {{ $user_details->homepage_select_workshop }}
            </td>
        <td class="ttt">
            <a href="{{ $user_details->blenderTask }}" target="_blank">{{ $user_details->blenderTask }}</a>
            </td>
      <td class="ttt">
                {{ $user_details->day }}
            </td>
       <td class="ttt">
                {{ $user_details->time }}
            </td>
        
    </tr>
    @endforeach
 
</table>

@endsection