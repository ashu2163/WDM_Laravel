
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
        <h2 id="username">User: </h2>
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
        <h3 id="clickedName">Project</h3>
        <div>
            <div class="displayTag">
                <p><b>Project ID</p>
                <p><b>Project Name</p>
                <p><b>Project Description</p>
                <p><b>ImageURL</p>
                <p><b>Date</p>
                <p style='padding-right:40px; padding-left:30px;'><b>Edit</p>
                <p><b>Delete</p>
            </div>
                @foreach($projs as $p)             
                    <div class='displayTag1'>
                    <p id='projectid' >{{$p['ProjectID']}} </p>
                    <p id='pn{{$p["ProjectID"]}}'>{{ $p["ProjectName"] }} </p>
                    <p id='pd{{$p["ProjectID"]}}'>{{ $p["ProjectDescription"]   }} </p>
                    <img id='imgsrc{{   $p["ProjectID"] }}' src='{{ $p["imgUrl"]    }}'>
                    <p id='date{{$p["ProjectID"]}}'>{{ $p["Date"] }} </p>
                    <div class='box'>
                        <a  class='button' href='#popup1' onclick='btnEdit({{ $p["ProjectID"] }})'> Edit </a>
                    </div>
                    <div class='box'>
                        <a  class='button' href='#popup3' onclick='btnDelete({{ $p["ProjectID"] }})'> Delete </a>
                    </div>
                    </div>
                @endforeach
            
        </div>


    <div id="popup1" class="overlay">
	<div class="edit-popup" >
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminproject.update')}}"  method="post" enctype="multipart/form-data" class="form-container">
    @csrf
        <table>  
        <tr>
        <td  style="color: #888888; font-weight:normal;">Project ID:</td>
        <td style="color: #888888; font-weight:normal;">Project Name:</td>
        </tr>
        <tr>
          <td><input type="text" id="id" name="id"  required readonly="yes"></td>
           
          
          <td><input type="text" id="projectname" name="projectname" required><td>
              
          </tr>
            </table>
          <p>Project Description:</p>
          <textarea id="projdesc" name="projdesc" rows="5" width="50%"></textarea>
        
          <p>Image:</p>
          <img id="image" name="image" width="150px"  >
          
          <p> Want to change image?<p>
          <input type="file" id="imgfile" name="imgfile" >      

          <p>Date:</p>
          <input type="date" id="date"  name="date" >

          <button type="submit" class="editbtn" name="editbtn" >Edit</button>
        </form>
        </div>
    </div>

    <div id="popup2" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminproject.store')}}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf
          <p>Project Name:</p>
          <input type="text" id="inprojectname" name="projectname" required>

          <p>Project Description:</p>
          <textarea id="inprojdesc" name="projdesc" rows="5" width="50%"></textarea>
                  
          <p> Want to add image?<p>
          <input type="file" id="inimgfile" name="inimgfile" >      

          <p>Date:</p>
          <input type="Date" id="indate"  name="indate" required> 

          <button type="submit" class="btn" >Add</button>
        </form>
        </div>
    </div>


    <div id="popup3" class="overlay">
	<div class="delete-popup">
    <a class="close" href="#">&times;</a>
    <form action="{{route('adminproject.destroy')}}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf
          <input type='text' id='projId' name='projId' hidden>
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

    <script>
      function btnEdit(x) {
        document.getElementById('id').value=x;
        pd=document.getElementById("pd"+x).innerHTML;
        pn=document.getElementById("pn"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        document.getElementById('date').value=date;
        img=document.getElementById("imgsrc"+x).src;
        document.getElementById('projectname').value=pn;
        document.getElementById('projdesc').value=pd;
        document.getElementById('image').src=img;
      }

      function btnDelete(x){
          document.getElementById('projId').value=x;

      }
      
      function closeForm() {
        document.getElementById("popup1").style.display="none";
      }
    </script>
</body>
</html>