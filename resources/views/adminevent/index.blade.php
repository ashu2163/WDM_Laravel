
<!-- @section('content') -->

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

<div class="nav-container" id="myTopnav">
    <img src="image/logo.png">
    <a href="./forms/create" >inicio</a>
    <a href="./semblanza">semblanza</a>
    <a href="./centro_augusto">centro augusto mijares</a>
    <a href="./proyectos" >proyectos</a>
    <a href="./eventos" >eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="./videos">videos</a>
    <a href="./equipo">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="./adminproject" id="userTag" style="color: #454cde" >User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>

</div>
<div id="wrapper" class="User">
    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User:{{$name}} </h2>
        <text onclick="signout()" >sign out</text>
    </div>
    <hr>

    <div class="vertical-menu">
        <a href="./adminproject" id="project" >Project</a>
        <a href="./adminevent" id="event" >Event</a>
        <a href="contacts.php" id="contact" >Contact</a>
        <a href="./adminvideo" id="video" >Videos</a>

    </div>

<div class="table_container">
        <h3 id="clickedName">Event</h3>
        <div>
            <div class="displayTag">
                <p><b>Event ID</p>
                <p><b>Event Type</p>
                <p><b>Event Description</p>
                <p><b>Event URL</p>
                <p><b>Date</p>
                <p style='padding-right:40px; padding-left:30px;'><b>Edit</p>
                <p><b>Delete</p>
            </div>
                @foreach($projs as $p)
                    <div class='displayTag1'>
                    <p id='eid' >{{$p['EventID']}} </p>
                    <p id='et{{$p["EventID"]}}'>{{ $p["EventType"] }} </p>
                    <p id='ed{{$p["EventID"]}}'>{{ $p["EventDescription"]   }} </p>
                    <img id='eventurl{{   $p["EventID"] }}' src='{{ $p["EventUrl"]    }}'>
                    <p id='date{{$p["EventID"]}}'>{{ $p["Date"] }} </p>
                    <div class='box'>
                        <a  class='button' href='#popup1' onclick='btnEdit({{ $p["EventID"] }})'> Edit </a>
                    </div>
                    <div class='box'>
                        <a  class='button' href='#popup3' onclick='btnDelete({{ $p["EventID"] }})'> Delete </a>
                    </div>
                    </div>
                @endforeach

        </div>


    <div id="popup1" class="overlay">
	<div class="edit-popup" >
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminevent.update')}}"  method="post" enctype="multipart/form-data" class="form-container">
    @csrf
        <p>Event ID:</p>
          <input type="text" id="eventid" name="eventid"  required readonly="yes">

          <!-- <p>User ID:</p>
          <input type="text" id="userid" name="userid" required readonly="yes"> -->

          <p>Event Type:</p>
          <input type="text" id="eventtype" name="eventtype" required>

          <p>Event Description:</p>
          <textarea id="eventdescription" name="eventdescription" rows="5" width="50%"></textarea>

          <p>Image:</p>
          <img id="eventimage" name="eventimage" width="150px"  >

          <p> Want to change image?<p>
          <input type="file" id="eventimgfile" name="eventimgfile" >

          <p>Date:</p>
          <input type="date" id="date"  name="date" required>

          <button type="submit" class="Editbtn" name="editbtn" >Edit</button>

          <!-- <button type="submit" class="Deletebtn" name="deletebtn" >Delete</button> -->

        </form>
        </div>
    </div>

    <div id="popup2" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminevent.store')}}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf

    <p>Event Type:</p>
    <input type="text" id="ineventtype" name="ineventtype" required>


    <p>Event Description:</p>
    <textarea id="ineventdescription" name="ineventdescription" rows="5" width="50%"></textarea>

    <p> Want to insert image?<p>
    <input type="file" id="ineventimgfile" name="ineventimgfile" >

    <p>Date:</p>
    <input type="Date" id="indate"  name="indate" required>

    <button type="submit" class="btn" >Add</button>

        </form>
        </div>
    </div>


    <div id="popup3" class="overlay">
	<div class="delete-popup">
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminevent.destroy')}}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf
          <input type='text' id='eventId' name='eventId' hidden>
          <p>Do you really want to delete this Project??</p>
          <button type="submit" class="btn" >Delete</button>
        </form>
        </div>
    </div>


        <div class='box'>
            <script>
                function openpop() {
                    window.location.href='#popup2';
                }
            </script>
            <button class='button' id="iddButton" href='#popup2' onclick="openpop()">
                Add
            </button>
        </div>
    </div>

    <footer>
        <div class="container">
            <div id="bootom-container" >
                <hr>
                <text>Copyright @2020 all rights reserved | This template is made with <text id="name">❤</text> by <text id="name">Jimmy and ashu</text></text>
                <div id="iconGroup" style="float: right">
                    <img src="image/facebook.png" class="facebook" alt="">
                    <img src="image/twitter.png" class="twitter" alt="">
                    <img src="image/basketball.png" alt="">
                    <img src="image/Be.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>


    <script>
      function btnEdit(x) {
        et=document.getElementById("et"+x).innerHTML;
        ed=document.getElementById("ed"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        eventurl=document.getElementById("eventurl"+x).src;
        document.getElementById('eventid').value=x;
        document.getElementById('eventtype').value=et;

        document.getElementById('eventdescription').value=ed;
        document.getElementById('date').value=date;
        document.getElementById('eventimage').src=eventurl;

    }

    function btnDelete(x){
        document.getElementById('eventId').value=x;
        alert(document.getElementById('eventId').value);
      }

      function closeForm() {
        document.getElementById("popup1").style.display="none";
      }
    </script>
</body>
</html>
