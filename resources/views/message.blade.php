@extends('app')

@section('title', 'admin')

@section('header')
    @parent

@endsection

@section('content')


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/User.js"></script>
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/User.js"></script>
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User:{{$name}} </h2>
        
    </div>
    <hr>

    <div class="vertical-menu">
        <a href="./adminproject" id="project" >Project</a>
        <a href="./adminevent" id="event" >Event</a>
        <a href="./contacts" id="contact" >Contact</a>
        <a href="./adminvideo" id="video" >Videos</a>
        @if($role =='Admin')
            <a href="./messages" id="message" >Messages</a>
        @endif

    </div>
    <div class="table_container">
        <h3 id="clickedName">Event</h3>
        <div>
        
            <div class="displayTag">
                <!-- <p ><b>User ID</p> -->
                <p style='padding-right:60px;' ><b>Email From</p>
                <p style='padding-left:60px;' ><b>Message</p>
            </div>
            @foreach($mess as $p)
            <div class='displayTag1' id='ajx'>
            <form action="messages"  method="post">
            <input type="text" id="id" name="id" value='{{$p["id"]}}' hidden></input>
            <p id='eid{{$p["id"]}}' style='padding-right:60px;' > {{$p["EmailID"]}}</p>
            <p id='msgid{{$p["id"]}}' style='padding-left:60px;'>{{$p["Message"]}}</p>
            <div class='box'>
            <button  class='submit' style='width:150px; text-align:center;'> Mark as Read!!</a>
            </form>
            </div>
        @endforeach
            </div>
            <script>
                function btnMark(x) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert("Marked as read");
                        document.getElementById('ajx').innerHTML=this.responseText;
                    } 
                };
                xhttp.open("GET", "./markread?id="+x, true);
                xhttp.send();
                }           
            </script>
    </div>
    
    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>

    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>
</div>
@endsection


@section('footer')
    @parent
@endsection


</body>
    
</html>

