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
                        <span class="caption-subject font-dark bold uppercase">Workshop'19</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm" href="{{url('Workshop')}}">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Edit </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("Workshop/$item->id")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('PUT') }}

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->name}}" required name="name"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Full Name</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->email}}" required name="email"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Email</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->mobile}}" required name="mobile"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Mobile Number</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->faculty}}" required name="faculty"
                                               class="form-control input-lg">
                                        <label for="form_control_1 input-lg">Faculty Name</label>
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
                                        <select required name="select_workshop" class="form-control">
                                            <option @if($item->select_workshop=="Linux") selected @endif
                                            value="Linux">Linux
                                            </option>
                                            <option @if($item->select_workshop=="Blender") selected @endif
                                            value="Blender">Blender
                                            </option>
                                            <option @if($item->select_workshop=="Laravel") selected @endif
                                            value="Laravel">Laravel
                                            </option>
                                        </select>
                                        <label for="select_workshop">Select Workshop</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="day" class="form-control">
                                            <option @if($item->day==1) selected @endif
                                            value="1">Monday
                                            </option>
                                            <option @if($item->day==2) selected @endif
                                            value="2">Tuesday
                                            </option>
                                            <option @if($item->day==3) selected @endif
                                            value="3">Wednesday
                                            </option>
                                            <option @if($item->day==4) selected @endif
                                            value="4">Thursday
                                            </option>
                                            <option @if($item->day==5) selected @endif
                                            value="5">Saturday
                                            </option>
                                        </select>
                                        <label for="day">Day</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="time" class="form-control">
                                            <option @if($item->time==1) selected @endif
                                            value="1">from 10:00 to 11:00
                                            </option>
                                            <option @if($item->time==2) selected @endif
                                            value="2">from 11:00 to 12:00
                                            </option>
                                            <option @if($item->time==3) selected @endif
                                            value="3">from 12:00 to 01:00
                                            </option>
                                            <option @if($item->time==4) selected @endif
                                            value="4">from 01:00 to 02:00
                                            </option>
                                            <option @if($item->time==5) selected @endif
                                            value="5">from 02:00 to 03:00
                                            </option>
                                            <option @if($item->time==6) selected @endif
                                            value="6">from 03:00 to 04:00
                                            </option>
                                            <option @if($item->time==7) selected @endif
                                            value="7">from 04:00 to 05:00
                                            </option>
                                        </select>
                                        <label for="time">Time</label>
                                    </div>

                                    <button class="btn blue">Submit</button>
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
