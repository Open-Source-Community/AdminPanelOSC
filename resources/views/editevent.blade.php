@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update {{$notes->title}} Details</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="/edit_event/{{$notes->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title :</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$notes->title}}" placeholder="Enter Title of Event" name="title"
                                           required class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="url">Image URL :</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$notes->imageurl}}" placeholder="Enter Image URL" name="imageurl"
                                           required class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="desc">Description :</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$notes->description}}" placeholder="Enter Description"
                                           name="description" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-default">Update Event</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
