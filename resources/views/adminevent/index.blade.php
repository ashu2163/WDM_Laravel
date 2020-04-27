@extends('app')

@section('title', 'admin')

@section('header')
    @parent

@endsection

@section('content')



    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User:{{$name}} </h2>
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
            <a href="./messages" id="message" >Messages</a>
            @endif

        </div>
    </div>
<div class="col-md-9">
        <h3 id="clickedName">Event</h3>
    <div class="table-responsive">
     <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Event Type</th>
            <th scope="col">Event Description</th>
            <th scope="col">Event picture</th>
            <th scope="col">Event date</th>
            <th scope="col">operataion</th>
        </tr>
        </thead>
        <tbody>
                @foreach($projs as $p)
                    <tr>
                    <td id='eid' >{{$p['EventID']}} </td>
                    <td id='et{{$p["EventID"]}}'>{{ $p["EventType"] }} </td>
                    <td id='ed{{$p["EventID"]}}'>{{ $p["EventDescription"]   }} </td>
                    <td> <img class="img-fluid" alt="Responsive image" id='eventurl{{   $p["EventID"] }}' src='{{ $p["EventUrl"]    }}'> </td>
                    <td id='date{{$p["EventID"]}}'>{{ $p["Date"] }} </td>
                        <td>
                                <a  class='button' href='#popup1' onclick='btnEdit({{ $p["EventID"] }})'> Edit </a>
                                <a  class='button' href='#popup3' onclick='btnDelete({{ $p["EventID"] }})'> Delete </a>
                        </td>
                    </tr>
                @endforeach

        </tbody>
    </table>
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




</div>


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
@endsection


@section('footer')
    @parent
@endsection
