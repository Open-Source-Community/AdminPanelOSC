@extends('app')

@section('body')
    <br><br><br><br>
    <div class="container marketing">

        <div class="container">
            <h1 style="text-align: center;">Update {{$notes->title}} Details</h1>
            <br>
            <form class="form-horizontal" role="form" method="post" action="/edit_committee/{{$notes->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        <button type="submit" name="submit" class="btn btn-default">Update Committee</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection