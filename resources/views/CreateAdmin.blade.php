@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Admin</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="/addadmin">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Name">Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Enter Name" name="name" required
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
                                <label class="control-label col-sm-2" for="Password">Password :</label>
                                <div class="col-sm-10">
                                    <input type="password" placeholder="Enter Password" name="password" required
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-default">Add Admin</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection