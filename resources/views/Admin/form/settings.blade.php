@extends('layouts.container')

@section('content')
    <!-- BEGIN CONTENT -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" type="text/css" rel="stylesheet" />
    <link href="{{asset('assets/apps/css/form.css')}}" type="text/css" rel='stylesheet'>

    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase">Settings</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <form class="form-horizontal " action="/form/settings" method="POST">
                        {{ csrf_field() }}
                        <div class='choice row'>
                            <span class='col-lg-2'>Day</span>
                            <select  class="form-control  col-lg-10"  id="DAY" required name="DAY">
                            <option value="" selected>Select day</option>                                        
                                @foreach ($days as $day )
                                    <option value="{{$day->id}}">{{$day->day ." | " .$day->date}}</option>                                        
                                @endforeach
                            
                            </select>
                        </div>
                        <div class='choice row'>
                            <span class='col-sm-2'>Time</span>
                            <select  class="form-control js-example-tokenizer col-lg-10" disabled id="TIME"  name="TIME[]" required multiple="multiple" >                                     
                            </select>
                        </div>
                        <div class='row actions'>
                            <span class='change col-xs-2' ></span>
                            <span class='col-xs-10'>
                            <input type="submit" value="Edit">
                            <input type="button"  value="ADD" id="showform">
                            </span>
                        </div>
                    </form>  
                
                    
                    <form class="form-horizontal formadd" action="/form/settings/add" method="POST" style="display:none" id="formadd">
                        {{ csrf_field() }}
                        <div class='choice row'>
                            <span class='col-lg-2'>Day</span>
                            <select  class="form-control  col-lg-10"  id="DAYADD" required name="DAYADD">
                                <option value="" selected>Select day</option>                                        
                                <option value="Saturday" >Saturday</option>
                                <option value="Sunday" >Sunday</option>
                                <option value="Monday" >Monday</option>
                                <option value="Tuesday" >Tuesday</option>
                                <option value="Wednesday" >Wednesday</option>
                                <option value="Thursday" >Thursday</option>
                            </select>
                        </div>
                        <div class='choice row'>
                            <span class='col-xs-2'>Date</span>
                            <input type="date" class="date col-xs-10" name="DATE" id="DATE" disabled>
                        </div>
                        <div class='choice row'>
                            <span class='col-lg-2'>Time</span>
                            <select  class="form-control js-example-tokenizer col-lg-10" disabled id="TIMEADD"  name="TIMEADD[]" required multiple="multiple" >                                     
                                @foreach ($times as $time )
                                    <option  value="{{$time->time}}"  >{{$time->time}}</option>                                      
                                @endforeach
                            </select>
                        </div>
                        <div class='row actions'>
                            <span class='change col-xs-2' ></span>
                            <span class='col-xs-10'>
                            <input type="submit"  value="ADD">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/apps/scripts/form.js')}}" type="text/javascript"></script>

    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
        $(document).ready(function(){
            $("#DAY").change(function(){
                var DAY = $(this).find(":selected").val();
                if( DAY != "" && DAY !="Select day"){
                    $.ajax({
                        url:"/form/getday",
                        type:"get",
                        data:{'day':DAY ,'_token':'{{csrf_token()}}'}
                    })
                    .done(function(times){
                        $("#TIME").attr("disabled", false);
                        $("#TIME").html(times);
                    }); 
                }
            });
            $("#DAYADD").change(function(){
                var day = $(this).find(":selected").val();
                if( day != "" && day != "Select day"){
                    $("#DATE").attr("disabled", false);
                }
                else{
                    $("#DATE").attr("disabled", true);
                }
                var date =$("DATE").val();
                console.log(date);
                if( day != "" && date != "Mm/Dd/Yyyy"){
                    $("#TIMEADD").attr("disabled", false);
                }else{
                    $("#TIMEADD").attr("disabled", true);
                }
            });
            
            
        });

        $('#showform').click(function(){
            $('#formadd').css("display","block");
        });

        $("#dash").removeClass("active");
        $(".committees").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
        
    </script>
@endsection
