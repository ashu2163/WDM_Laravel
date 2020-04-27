@extends('app')

@section('title', 'admin')

@section('header')
    @parent

@endsection

@section('content')


    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User: {{$name}}</h2>
    </div>
    <hr>

 <div class="row">

     <div class="col-md-3">
    <div class="vertical-menu">
        <a href="./adminproject" id="project" >Project</a>
        <a href="./adminevent" id="event" >Event</a>
        <a href="./contacts" id="contact" >Contact</a>
        <a href="./adminvideo" id="video" >Videos</a>
        @if($role =='Admin')
        <a href="./messages" id="video" >Messages</a>
        @endif
    </div>
     </div>

     <div class="col-9">

        <h3 id="clickedName">Project</h3>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Project Description</th>
            <th scope="col">Project picture</th>
            <th scope="col">Project date</th>
            <th scope="col">operataion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projs as $p)
                <tr>
                <td id='projectid' >{{$p['ProjectID']}} </td>
                <td id='pn{{$p["ProjectID"]}}'>{{ $p["ProjectName"] }} </td>
                <td id='pd{{$p["ProjectID"]}}'>{{ $p["ProjectDescription"]   }} </td>
                <td> <img class="img-fluid" alt="Responsive image" id='imgsrc{{   $p["ProjectID"] }}' src='{{ $p["imgUrl"]    }}'> </td>
                <td id='date{{$p["ProjectID"]}}'>{{ $p["Date"] }} </td>
                <td>
                    <a  class='button' href='#popup1' onclick='btnEdit({{ $p["ProjectID"] }})'> Edit </a>
                    <a  class='button' href='#popup3' onclick='btnDelete({{ $p["ProjectID"] }})'> Delete </a>
                </td>
                </tr>
        @endforeach

        </tbody>
    </table>
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
            <button type="button" class="btn btn-primary" id="iddButton" href='#popup2' onclick="openpop()">
                Add
            </button>
        </div>
     </div>

</div>

    <script>
      function btnEdit(x) {
        document.getElementById('id').value=x;
        pd=document.getElementById("pd"+x).innerHTML;
        pn=document.getElementById("pn"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        document.getElementById('date').value=date;
        alert(document.getElementById('date').value);
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
@endsection


@section('footer')
    @parent
@endsection
