@extends('app')

@section('body')

    <br><br><br><br>
    <div class="container marketing">

        <div class="container">
            <h1 style="text-align: center;">Add Committee</h1>
            <br>
            <form class="form-horizontal" role="form" method="post" action="/addCommittee">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Committee Name :</label>
                    <div class="col-md-10">
                        <select name="title" class="form-control">

                            <option value="EnglishHeros">English Heros</option>
                            <option value="Projects">Projects</option>
                            <option value="HR">HR</option>
                            <option value="PR">PR</option>
                            <option value="FR">FR</option>
                            <option value="LR">LR</option>
                            <option value="IT">IT</option>
                            <option value="Laravel">Laravel</option>
                            <option value="CCC">CCC</option>
                            <option value="Art">Art</option>
                            <option value="Linux">Linux</option>
                            <option value="Blender">Blender</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Image URL :</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Enter Image URL" name="imageurl" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Description :</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Enter Description" name="description" required
                               class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-default">Add Committee</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection