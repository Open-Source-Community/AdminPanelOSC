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
                        <span class="caption-subject font-dark bold uppercase">الاقسام</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm"
                               href="{{url("committees/$committee_id/images")}}">
                                رجوع
                            </a>
                        </div>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> اضف قسم</span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("committees/$committee_id/images")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{$committee_id}}" name="committee_id">
                                <div class="form-body">

                                    <div class="form-group form-md-line-input">
                                        <input required type="text" name="image" class="form-control">
                                        <label for="form_control_1 input-lg">الصورة </label>
                                    </div>

                                    <button type="submit" class="btn blue">اضف</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <script>
        $("#dash").removeClass("active");
        $(".committees").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
    </script>
@endsection
