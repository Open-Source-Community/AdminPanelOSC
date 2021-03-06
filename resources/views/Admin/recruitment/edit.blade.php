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
                                            <option @if($item->year=="First Year") selected @endif
                                            value="First Year">First Year
                                            </option>
                                            <option @if($item->year=="Second Year") selected @endif
                                            value="Second Year">Second Year
                                            </option>
                                            <option @if($item->year=="Third Year") selected @endif
                                            value="Third Year">Third Year
                                            </option>
                                            <option @if($item->year=="Fourth Year") selected @endif
                                            value="Fourth Year">Fourth Year
                                            </option>
                                        </select>
                                        <label for="year">Year</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="first_committee" class="form-control">
                                            <option @if($item->first_committee=="Linux") selected @endif
                                            value="Linux">Linux
                                            </option>
                                            <option @if($item->first_committee=="Blender") selected @endif
                                            value="Blender">Blender
                                            </option>
                                            <option @if($item->first_committee=="English Heroes") selected @endif
                                            value="English Heroes">English Heroes
                                            </option>
                                            <option @if($item->first_committee=="Content Creators") selected @endif
                                            value="Content Creators">Content Creators
                                            </option>
                                            <option @if($item->first_committee=="Artwork") selected @endif
                                            value="Artwork">Artwork
                                            </option>
                                            <option @if($item->first_committee=="Projects") selected @endif
                                            value="Projects">Projects
                                            </option>
                                            <option @if($item->first_committee=="Web") selected @endif
                                            value="Web">Web
                                            </option>
                                            <option @if($item->first_committee=="Public Relations") selected @endif
                                            value="Public Relations">Public Relations
                                            </option>
                                            <option @if($item->first_committee=="Human Resources") selected @endif
                                            value="Human Resources">Human Resources
                                            </option>
                                            <option @if($item->first_committee=="Fundraising") selected @endif
                                            value="Fundraising">Fundraising
                                            </option>
                                            <option @if($item->first_committee=="Logistics") selected @endif
                                            value="Logistics">Logistics
                                            </option>
                                        </select>
                                        <label for="first_committee">First Committee</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="second_committee" class="form-control">
                                            <option @if($item->second_committee=="Linux") selected @endif
                                            value="Linux">Linux
                                            </option>
                                            <option @if($item->second_committee=="Blender") selected @endif
                                            value="Blender">Blender
                                            </option>
                                            <option @if($item->second_committee=="English Heroes") selected @endif
                                            value="English Heroes">English Heroes
                                            </option>
                                            <option @if($item->second_committee=="Content Creators") selected @endif
                                            value="Content Creators">Content Creators
                                            </option>
                                            <option @if($item->second_committee=="Artwork") selected @endif
                                            value="Artwork">Artwork
                                            </option>
                                            <option @if($item->second_committee=="Projects") selected @endif
                                            value="Projects">Projects
                                            </option>
                                            <option @if($item->second_committee=="Web") selected @endif
                                            value="Web">Web
                                            </option>
                                            <option @if($item->second_committee=="Public Relations") selected @endif
                                            value="Public Relations">Public Relations
                                            </option>
                                            <option @if($item->second_committee=="Human Resources") selected @endif
                                            value="Human Resources">Human Resources
                                            </option>
                                            <option @if($item->second_committee=="Fundraising") selected @endif
                                            value="Fundraising">Fundraising
                                            </option>
                                            <option @if($item->second_committee=="Logistics") selected @endif
                                            value="Logistics">Logistics
                                            </option>
                                        </select>
                                        <label for="second_committee">Second Committee</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="day" class="form-control">
                                            <option @if($item->day==1) selected @endif
                                            value="1">Saturday
                                            </option>
                                            <option @if($item->day==2) selected @endif
                                            value="2">Sunday
                                            </option>
                                            <option @if($item->day==3) selected @endif
                                            value="3">Monday
                                            </option>
                                            <option @if($item->day==4) selected @endif
                                            value="4">Tuesday
                                            </option>
                                            <option @if($item->day==5) selected @endif
                                            value="5">Wednesday
                                            </option>
                                            <option @if($item->day==6) selected @endif
                                            value="6">Thursday
                                            </option>
                                        </select>
                                        <label for="day">Day</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="time" class="form-control">
                                            <option @if($item->time==1) selected @endif
                                            value="1">from 10:00 to 11:30
                                            </option>
                                            <option @if($item->time==2) selected @endif
                                            value="2">from 11:30 to 01:00
                                            </option>
                                            <option @if($item->time==3) selected @endif
                                            value="3">from 01:00 to 02:30
                                            </option>
                                            <option @if($item->time==4) selected @endif
                                            value="4">from 02:30 to 04:00
                                            </option>
                                            <option @if($item->time==5) selected @endif
                                            value="5">from 04:00 to 05:30
                                            </option>
                                        </select>
                                        <label for="time">Time</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <select required name="status" class="form-control">
                                            <option @if($item->status=="Accepted") selected @endif
                                            value="Accepted">Accepted
                                            </option>
                                            <option @if($item->status=="Wating A") selected @endif
                                            value="Wating A">Wating A
                                            </option>
                                            <option @if($item->status=="Wating B") selected @endif
                                            value="Wating B">Wating B
                                            </option>
                                            <option @if($item->status=="Rejected") selected @endif
                                            value="Rejected">Rejected
                                            </option>
                                        </select>
                                        <label for="status">Status</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->comment}}" required name="comment"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Comment</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->hr_interviewer}}" required name="hr_interviewer"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">HR Interviewer</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->first_com_interviewer}}" required name="first_com_interviewer"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">First Committee Interviewer</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->second_com_interviewer}}" required name="second_com_interviewer"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Second Committee Interviewer</label>
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
