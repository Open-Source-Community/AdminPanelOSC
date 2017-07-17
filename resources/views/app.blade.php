<!DOCTYPE html>
<html lang="en">
<head>
    <title>OSC AdminPanel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-fixed-top navbar-inverse">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">AdminPanel Open Source</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li class="active"><a href="/">Add Event</a></li>
                <li class="active"><a href="/showallevents">Show All Events</a></li>

                <li class="active"><a href="/addcommittee">Add Committee</a></li>
                <li class="active"><a href="/showallcommittees">Show All Committees</a></li>

                <li class="active"><a href="/addimagestocommittee">Add Images To Committee</a></li>
                <li class="active"><a href="/showallimages">Show All Images of Committee</a></li>

            </ul>
        </div>
    </div>
</nav>

@yield('body')

</body>
</html>
