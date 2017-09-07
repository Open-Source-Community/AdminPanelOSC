@extends('layouts.app')

@section('content')
   
<table class="ttt">
<tr class="ttt">
    <th class="ttt">ID</th>
    <th class="ttt">Firstname</th>
    <th class="ttt" class="ttt" class="ttt">Lastname</th>
    <th class="ttt" class="ttt">Email</th>
    <th class="ttt">Mobile Number</th>
    <th class="ttt">Year</th>
    <th class="ttt">First Committee</th>
    <th class="ttt">Second Committee</th>
    <th class="ttt">Day</th>
    <th class="ttt">Interview Time</th>
  </tr>
  
      @foreach($users_data as $user_details)    
    <tr>
            <td class="ttt">
                {{ $user_details->id }}
            </td>
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
        @if ($user_details->homepage_select_first==0)
            <td class="ttt">
                Nothing
            </td>
        @elseif ($user_details->homepage_select_first==1)
            <td class="ttt">
                Web
            </td>
        @elseif ($user_details->homepage_select_first==2)
            <td class="ttt">
                Linux
            </td>
        @elseif ($user_details->homepage_select_first==3)
            <td class="ttt">
                Blender
            </td>
        @elseif ($user_details->homepage_select_first==4)
            <td class="ttt">
                English Heroes
            </td>
        @elseif ($user_details->homepage_select_first==5)
            <td class="ttt">
                Content Creator
            </td>
        
        @elseif ($user_details->homepage_select_first==6)
            <td class="ttt">
                ArtWork
            </td>
        @elseif ($user_details->homepage_select_first==7)
            <td class="ttt">
                Projects
            </td>
        @elseif ($user_details->homepage_select_first==8)
            <td class="ttt">
                Public Relation
            </td>
        @elseif ($user_details->homepage_select_first==9)
            <td class="ttt">
                Human Resource
            </td>
        @elseif ($user_details->homepage_select_first==10)
            <td class="ttt">
                Fundraising
            </td>
         @elseif ($user_details->homepage_select_first==11)
            <td class="ttt">
                Logistics
            </td>
        @endif
      
        @if ($user_details->homepage_select_second==0)
            <td class="ttt">
                Nothing
            </td>
        @elseif ($user_details->homepage_select_second==1)
            <td class="ttt">
                Web
            </td>
        @elseif ($user_details->homepage_select_second==2)
            <td class="ttt">
                Linux
            </td>
        @elseif ($user_details->homepage_select_second==3)
            <td class="ttt">
                Blender
            </td>
        @elseif ($user_details->homepage_select_second==4)
            <td class="ttt">
                English Heroes
            </td>
        @elseif ($user_details->homepage_select_second==5)
            <td class="ttt">
                Content Creator
            </td>
        
        @elseif ($user_details->homepage_select_second==6)
            <td class="ttt">
                ArtWork
            </td>
        @elseif ($user_details->homepage_select_second==7)
            <td class="ttt">
                Projects
            </td>
        @elseif ($user_details->homepage_select_second==8)
            <td class="ttt">
                Public Relation
            </td>
        @elseif ($user_details->homepage_select_second==9)
            <td class="ttt">
                Human Resource
            </td>
        @elseif ($user_details->homepage_select_second==10)
            <td class="ttt">
                Fundraising
            </td>
         @elseif ($user_details->homepage_select_second==11)
            <td class="ttt">
                Logistics
            </td>
        @endif
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