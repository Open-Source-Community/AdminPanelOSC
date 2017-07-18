@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Show All Committees</div>

                    <div class="panel-body">

                        @foreach($user_data as $committee)
                            <p>
                                {{ $committee->title }}
                                <a href="committees/{{ $committee->id }}/delete" class="pull-right"
                                   style="margin-left: 10px">Delete</a>
                                <a href="committees/{{ $committee->id }}/edit" class="pull-right"> Edit </a><br>
                                <img src="{{ $committee->imageurl }}">
                            <hr>
                            </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
