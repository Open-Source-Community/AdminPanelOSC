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
                        <span class="caption-subject font-dark bold uppercase">Online Recruitment</span>
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
                                <th>First Committee</th>
                                <th>Second Committee</th>
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
                                    <td>{{$item->first_committee}}</td>
                                    <td>{{$item->second_committee}}</td>
                                    @if($flag)
                                        <td>{{$item->day}}</td>
                                    @endif
                                    <td>{{$item->time}}</td>

                                    <td>
                                        <a href="{{url("OnlineRecruitment/$item->id/edit")}}">
                                            <button class="btn btn-warning label-sm">Edit</button>
                                        </a>
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
