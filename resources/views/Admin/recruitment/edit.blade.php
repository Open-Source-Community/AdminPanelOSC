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
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> تعديل </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("OnlineRecruitment/$item->id")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('PUT') }}

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->name}}" required type="text" name="name"
                                               class="form-control input-lg"
                                               placeholder="Full Name">
                                        <label for="form_control_1 input-lg">Full Name</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->email}}" required type="text" name="email"
                                               class="form-control input-lg"
                                               placeholder="Email">
                                        <label for="form_control_1 input-lg">Email</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->mobile}}" required type="text" name="mobile"
                                               class="form-control input-lg"
                                               placeholder="Mobile Number">
                                        <label for="form_control_1 input-lg">Mobile Number</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="year" class="form-control">
                                            <option selected
                                                    value="{{$item->year}}">{{$item->year}}
                                            </option>
                                            <option value="First Year">First Year</option>
                                            <option value="Second Year">Second Year</option>
                                            <option value="Third Year">Third Year</option>
                                            <option value="Fourth Year">Fourth Year</option>
                                        </select>
                                        <label for="year">Year</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="first_committee" class="form-control">
                                            <option selected
                                                    value="{{$item->first_committee}}">{{$item->first_committee}}
                                            </option>
                                            <option value="Linux">Linux</option>
                                            <option value="Blender">Blender</option>
                                            <option value="English Heroes">English Heroes</option>
                                            <option value="Content Creators">Content Creators</option>
                                            <option value="Artwork">Artwork</option>
                                            <option value="Projects">Projects</option>
                                            <option value="Web">Web</option>
                                            <option value="Public Relations">Public Relations</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="Fundraising">Fundraising</option>
                                            <option value="Logistics">Logistics</option>
                                        </select>
                                        <label for="first_committee">First Committee</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="second_committee" class="form-control">
                                            <option selected
                                                    value="{{$item->second_committee}}">{{$item->second_committee}}
                                            </option>
                                            <option value="Linux">Linux</option>
                                            <option value="Blender">Blender</option>
                                            <option value="English Heroes">English Heroes</option>
                                            <option value="Content Creators">Content Creators</option>
                                            <option value="Artwork">Artwork</option>
                                            <option value="Projects">Projects</option>
                                            <option value="Web">Web</option>
                                            <option value="Public Relations">Public Relations</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="Fundraising">Fundraising</option>
                                            <option value="Logistics">Logistics</option>
                                        </select>
                                        <label for="second_committee">Second Committee</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="day" class="form-control">
                                            <option selected
                                                    value="{{$item->day}}">{{$item->day}}
                                            </option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                        </select>
                                        <label for="day">Day</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="time" class="form-control">
                                            <option selected
                                                    value="{{$item->time}}">{{$item->time}}
                                            </option>
                                            <option value="from 10:00 to 11:30">from 10:00 to 11:30</option>
                                            <option value="from 11:30 to 01:00">from 11:30 to 01:00</option>
                                            <option value="from 01:00 to 02:30">from 01:00 to 02:30</option>
                                            <option value="from 02:30 to 04:00">from 02:30 to 04:00</option>
                                            <option value="from 04:00 to 05:30">from 04:00 to 05:30</option>
                                        </select>
                                        <label for="time">Time</label>
                                    </div>

                                    <button type="submit" class="btn blue">تعديل</button>
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
        $(".events").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
    </script>
@endsection
