@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Participle</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="/addParticiple">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="FirstName">First Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Enter First Name" name="first_name" required
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="LastName">Last Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Enter Last Name" name="last_name" required
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Email">Email :</label>
                                <div class="col-sm-10">
                                    <input type="email" placeholder="Enter email" name="email" required class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="ContactNumber">Contact Number :</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Contact Number" name="contact_no" required
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Year">Year :</label>
                                <div class="col-md-10">
                                    <select name="year" class="form-control">

                                        <option value="1st">1st year</option>
                                        <option value="2nd">2nd year</option>
                                        <option value="3rd">3rd year</option>
                                        <option value="4th">4th year</option>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Workshop">Workshop :</label>
                                <div class="col-md-10">
                                    <select name="homepage_select_workshop" class="form-control">

                                        <option value="Linux">Linux Workshop</option>
                                        <option value="Laravel">Laravel Workshop</option>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Day">Day :</label>
                                <div class="col-md-10">
                                    <select name="day" class="form-control">

                                          <option value="Saturday">Saturday</option>
                                          <option value="Sunday">Sunday</option>
                                          <option value="Monday">Monday</option>
                                          <option value="Tuesday">Tuesday</option>
                                          <option value="Wednesday">Wednesday</option>
                                          <option value="Thursday">Thursday</option>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Time">Time :</label>
                                <div class="col-md-10">
                                    <select name="time" class="form-control">

                                        <option value="10 am to 11 am">10 am to 11 am</option>
                                        <option value="11 am to 12 pm">11 am to 12 pm</option>
                                        <option value="12 pm to 1 pm">12 pm to 1 pm</option>
                                        <option value="1 pm to 2 pm">1 pm to 2 pm</option>  
                                        <option value="2 pm to 3 pm">2 pm to 3 pm</option>      
                                        <option value="3 pm to 4 pm">3 pm to 4 pm</option>  
                                        <option value="4 pm to 5 pm">4 pm to 5 pm</option>                                   
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-default">Create</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection