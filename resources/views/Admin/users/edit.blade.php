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
                        <span class="caption-subject font-dark bold uppercase">Users</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm" href="{{url('users')}}">
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
                                <span class="caption-subject bold uppercase"> Edit </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("users/$item->id")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('PUT') }}

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->name}}" required type="text" name="name"
                                               class="form-control input-lg"
                                               placeholder="Name ">
                                        <label for="form_control_1 input-lg">Name</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->email}}" required type="text" name="email"
                                               class="form-control input-lg"
                                               placeholder="email ">
                                        <label for="form_control_1 input-lg">E-mail</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->phone}}" required type="text" name="phone"
                                               class="form-control input-lg"
                                               placeholder="phone ">
                                        <label for="form_control_1 input-lg">phone</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label>Committee </label> <br />
                                       <label style="font-size: 12px;"> add all user committee </label>
                                        <div class="checkbox">
                                            <label><input name="committee_ids[]" type="checkbox" value="1">Linux</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input name="committee_ids[]" type="checkbox" value="2">Web</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">English Heroes</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox"
                                                          value="3">Blender</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">HR</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">PR</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">FR</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">LR</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox" value="3">CCC</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label><input name="committee_ids[]" type="checkbox"
                                                          value="3">Artwork</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select id="position" required name="position_id" class="form-control">
                                            <option selected
                                                    value="{{$item->position['id']}}">{{$item->position['name']}}
                                            </option>
                                            @foreach($positions as $position)
                                                <option selected
                                                        value="{{$position['id']}}">{{$position['name']}}
                                                </option>
                                            @endforeach

                                        </select>
                                        <label for="position">position</label>
                                        <span class="help-block">تتم الكتابة...</span>
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
        $(".users").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
    </script>
@endsection
