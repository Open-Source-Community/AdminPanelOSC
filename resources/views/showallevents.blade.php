@extends('app')

@section('body')
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Events</div>
                    <div class="panel-body">

                        {{--@foreach($user_data as $event)--}}
                        @for ($i = 0; $i < count($user_data); $i++)
                            <p>

                                {{ $user_data[$i]->title }}
                                <a href="events/{{ $user_data[$i]->id }}/delete" class="pull-right"
                                   style="margin-left: 10px">Delete</a>
                                <a href="events/{{ $user_data[$i]->id }}/edit" class="pull-right"> Edit </a>

                            </p>
                        @endfor
                        {{--@endforeach--}}

                        {{--@for ($i = 0; $i < 10; $i++)--}}
                        {{--<p>  The current value is {{ $i }} </p>--}}
                        {{--@endfor--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection