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
                        <span class="caption-subject font-dark bold uppercase">Slots</span>
                    </div>
                </div>
                <div class="portlet-body">
                        <form class="form-horizontal" action="/form/slots" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label class="control-label col-sm-2">Time</label>
                              <div class="col-sm-10">
                                <select class="form-control" id="time" name="time" required>

                                    <option value="" selected>Select Time</option>                                        
                                    @foreach ($times as $time )
                                        <option value="{{$time->id}}">{{$time->time}}</option>                                        
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2">Day:</label>
                              <div class="col-sm-10">
                                    <select disabled class="form-control" id="day" name="day" required>
                                    <option value="" selected>Select day</option>                                        
                                        @foreach ($days as $day )
                                            <option value="{{$day->id}}">{{$day->day ." | " .$day->date}}</option>                                        
                                        @endforeach
                                    </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Slots</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="slots" name="slots" required>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                          </form>
                          
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <script>
        $(document).ready(function(){
            $("#time").change(function(){
                var time = $(this).find(":selected").val();
                if( time != ""){
                    $("#day").attr("disabled" , false);
                }else{
                    $("#day").attr("disabled" , true);
                }
            });
            
            $("#day , #time").change(function(){
                if(time !="" && day !=""){
                    var time = $("#time").val();
                    var day = $("#day").val();
                    if( day != ""){
                        $.ajax({
                            url:"/form/getSlot",
                            type:"get",
                            data:{'day':day , 'time':time ,'_token':'{{csrf_token()}}'}
                        })
                        .done(function(slot){
                            $("#slots").val(slot);
                        });

                    }
                }
            });

        $("#dash").removeClass("active");
        $(".committees").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
    })
    </script>
@endsection
