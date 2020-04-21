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
        <h2 id="username">User:</h2>
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
    <h3 id="clickedName">Video</h3>
    <div>
        <div class="displayTag">
            <p><b>Video ID</p>
            <p><b>Video Type</p>
            <p><b>Description</p>
            <p><b>VideoUrl</p>
            <p><b>Date</p><p><b>Edit</p>
            <p><b>Delete</p>
        </div>
        @foreach($video as $p)
        <div class='displayTag1'>
            <p id='videoid'>{{$p["VideoID"]}}</p>
            <p id='vt{{$p["VideoID"]}}'>{{$p["Videotype"]}}</p>
            <p id='vd{{$p["VideoID"]}}'>{{$p["Description"]}}</p>
            <p id='vu{{$p["VideoID"]}}'>{{$p["VideoUrl"]}}</p>
            <p id='date{{$p["VideoID"]}}'>{{$p["Date"]}}</p>
            <div class='box'>
            <a  class='button' href='#popup1' onclick='btnEdit({{ $p["VideoID"] }})'> Edit </a>
            <a  class='button' href='#popup3' onclick='btnDelete({{ $p["VideoID"] }})'> Delete </a>
            </div>
        @endforeach
        </div>

    <div id="popup1" class="overlay">
	<div class="edit-popup" >
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminvideo.update')}}"  method="post" enctype="multipart/form-data" class="form-container">
    @csrf
        <p>Video ID:</p> 
        <input type="text" id="vid" name="videoid"  required readonly="yes">
          
        <p>Video Type:</p>
        <input type="text" id="videotype" name="videotype" required>

        <p>Video Description:</p>
        <textarea id="videodescription" name="videodescription" rows="5" width="50%"></textarea>
        
        <p>Video Url:</p>
        <input type="text" id="videoUrl" name="videourl" readonly="yes">

        <p> Want to change Video?<p>
        <input type="file" id="videofile" name="videofile" >

        <p>Date:</p>
        <input type="Date" id="date"  name="date" required>

        <button type="submit" class="Editbtn" name="editbtn" >Edit</button>
    </form>
    </div>
    </div>



    <div id="popup3" class="overlay">
	<div class="delete-popup">
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminvideo.destroy')}}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf
          <input type='text' id='videoId' name='videoId' hidden>
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
      function btnEdit(x) 
      {    
        vt=document.getElementById("vt"+x).innerHTML;
        vd=document.getElementById("vd"+x).innerHTML;
        vu=document.getElementById("vu"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        
        document.getElementById('vid').value=x;
        // document.getElementById('userid').value=ui;
        document.getElementById('videotype').value=vt;
        document.getElementById('videoUrl').value=vu;
        document.getElementById('videodescription').value=vd;
        document.getElementById('date').value=date;
      }

      function btnDelete(x){
        alert(x);
        document.getElementById('videoId').value=x;
        alert(document.getElementById('videoId').value);
      }
      
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
    </script>
</body>
