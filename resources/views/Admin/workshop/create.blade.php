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
                        <span class="caption-subject font-dark bold uppercase">Workshops'19</span>
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
                                <span class="caption-subject bold uppercase"> Add </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("Workshop")}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input required name="name" class="form-control input-lg">
                                        <span class="help-block">تتم الكتابة...</span>
                                        <label for="Full Name">Full Name</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input required name="email" class="form-control input-lg">
                                        <span class="help-block">تتم الكتابة...</span>
                                        <label for="Email">Email</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input required name="mobile" class="form-control input-lg">
                                        <span class="help-block">تتم الكتابة...</span>
                                        <label for="Mobile Number">Mobile Number</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input required name="faculty" class="form-control input-lg">
                                        <span class="help-block">تتم الكتابة...</span>
                                        <label for="Faculty Name">Faculty Name</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="year" class="form-control">
                                            <option selected value="">Choose Year</option>
                                            <option value="First Year">First Year</option>
                                            <option value="Second Year">Second Year</option>
                                            <option value="Third Year">Third Year</option>
                                            <option value="Fourth Year">Fourth Year</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="select_workshop" class="form-control">
                                            <option selected value="">Choose Workshop</option>
                                            <option value="Linux">Linux</option>
                                            <option value="Blender">Blender</option>
                                            <option value="Laravel">Laravel</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="day" class="form-control">
                                            <option selected value="">Select Day</option>
                                            <option value="1">Monday</option>
                                            <option value="2">Tuesday</option>
                                            <option value="3">Wednesday</option>
                                            <option value="4">Thursday</option>
                                            <option value="5">Saturday</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select required name="time" class="form-control">
                                            <option selected value="">Select Time</option>
                                            <option value="1">from 10:00 to 11:00</option>
                                            <option value="2">from 11:00 to 12:00</option>
                                            <option value="3">from 12:00 to 01:00</option>
                                            <option value="4">from 01:00 to 02:00</option>
                                            <option value="5">from 02:00 to 03:00</option>
                                            <option value="6">from 03:00 to 04:00</option>
                                            <option value="7">from 04:00 to 05:00</option>
                                        </select>
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
    <!-- END CONTENT -->
@endsection
