@extends('layouts.container')

@section('content')
    <!-- BEGIN CONTENT -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" type="text/css" rel="stylesheet" />
    <link href="{{asset('assets/select2/dist/css/select2.min.css')}}" rel="stylesheet"  type="text/css">
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
                    <div class='choice row'>
                        <span class='col-lg-2'>Day</span>
                        <select  class="js-example-tokenizer form-control "  multiple="multiple">
                            <option name='sunday' selected="selected" >sunday</option>
                            <option name='m' >monday</option>
                            <option name='d' >hh</option>
                            <option name='g' selected="selected">grgt</option>
                            <option name='k' >lo</option>
                        </select>
                    </div>
                    <div class='choice row'>
                        <span class='col-lg-2'>Time</span>
                        <select class='col-lg-10' name='time'  >
                            <option name='1' >From 10:00 to 11:30</option>
                        </select>
                    </div>
                    <span class='change col-lg-2' ></span>
                    <button>Edit</button>
                    <button>ADD</button>
                    
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    

    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js" type="text/javascript"></script>
    <script src="{{asset('assets/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/apps/scripts/form.js')}}" type="text/javascript"></script>
    <script>
        $("#dash").removeClass("active");
        $(".committees").addClass("open active").css("display", "block");
        $(".list").addClass("open active");
        
    </script>
@endsection
