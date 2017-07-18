@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Committee</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="/addCommittee">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="desc">Committee Name :</label>
                                <div class="col-md-10">
                                    <select name="title" class="form-control">

                                        <option value="Linux">Linux</option>
                                        <option value="Blender">Blender</option>
                                        <option value="English Heroes">English Heroes</option>
                                        <option value="Laravel">Laravel</option>
                                        <option value="Content Creators">Content Creators</option>
                                        <option value="Artwork">Artwork</option>
                                        <option value="Projects">Projects</option>
                                        <option value="IT">IT</option>
                                        <option value="Public Relations">Public Relations</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Fundraising">Fundraising</option>
                                        <option value="Logistics">Logistics</option>

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
            </div>
        </div>
    </div>
@endsection
