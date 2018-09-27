@extends('layouts.container')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase">Workshops</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Year</th>
                                <th>Faculty</th>
                                <th>Workshop</th>
                                @if($flag)
                                    <th>Day</th>
                                @endif
                                <th>Time</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    {{--<td>{{$item->id}}</td>--}}
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->faculty}}</td>
                                    <td>{{$item->select_workshop}}</td>
                                    @if($flag)
                                        @if($item->day == 1)
                                            <td>Saturday</td>
                                        @elseif($item->day == 2)
                                            <td>Sunday</td>
                                        @elseif($item->day == 3)
                                            <td>Monday</td>
                                        @elseif($item->day == 4)
                                            <td>Tuesday</td>
                                        @elseif($item->day == 5)
                                            <td>Wednesday</td>
                                        @elseif($item->day == 6)
                                            <td>Thursday</td>
                                        @endif
                                    @endif

                                    @if($item->time == 1)
                                        <td>from 10:00 to 11:00</td>
                                    @elseif($item->time == 2)
                                        <td>from 11:00 to 12:00</td>
                                    @elseif($item->time == 3)
                                        <td>from 12:00 to 01:00</td>
                                    @elseif($item->time == 4)
                                        <td>from 01:00 to 02:00</td>
                                    @elseif($item->time == 5)
                                        <td>from 02:00 to 03:00</td>
                                    @elseif($item->time == 6)
                                        <td>from 03:00 to 04:00</td>
                                    @endif

                                    <td>
                                        <a href="{{url("Workshop/$item->id/edit")}}">
                                            <button class="btn btn-warning label-sm">Edit</button>
                                        </a>
                                        <form onsubmit='return ConfirmDelete()' method="post"
                                              action="{{url("Workshop/$item->id")}}">
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger label-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center page-full-width">
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <script>
        $("#dash").removeClass("active");
        $(".events").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
    </script>
@endsection
