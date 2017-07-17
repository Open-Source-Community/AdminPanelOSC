@extends('app')

@section('body')
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Images of Committees</div>
                    <div class="panel-body">

                        @foreach($user_data as $image)
                            <p>
                                {{ $image->comm_name }}
                                <a href="images/{{ $image->id }}/delete" class="pull-right"
                                   style="margin-left: 10px">Delete</a>
                                <a href="images/{{ $image->id }}/edit" class="pull-right"> Edit </a><br>
                                <img src="{{ $image->imageurl }}">
                            <hr>
                            </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection