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
                        <span class="caption-subject font-dark bold uppercase">Events</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm" href="{{url('events/create')}}">
                               اضافة
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image </th>
                                <th>Title </th>
                                <th>Description </th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><img src="{{$item->imageurl}}" width="50" height="50"></td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>

                                    <td>
                                        <a href="{{url("events/$item->id/edit")}}">
                                            <button class="btn btn-warning label-sm">تعديل</button>
                                        </a>
                                        <form  onsubmit='return ConfirmDelete()' method="post" action="{{url("events/$item->id")}}">
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger label-sm">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center page-full-width">
                            {{$user_data->links()}}
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
