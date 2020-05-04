@extends('app')

@section('title', 'admin')

@section('header')
    @parent

@endsection

@section('content')

    <div class="titleRow">

        <h1>Welcome</h1>
        <h2 id="username">User:{{$name}}</h2>
    </div>
    <hr>

<div class="row">

    <div class="col-md-3">
      <div class="vertical-menu">
        <a href="./adminproject" id="project" >Project</a>
        <a href="./adminevent" id="event" >Event</a>
        <a href="contacts.php" id="contact" >Contact</a>
        <a href="./adminvideo" id="video" >Videos</a>
        @if($role =='Admin')
        <a href="./messages" id="video" >Messages</a>
        @endif
    </div>
    </div>
        <div class="col-md-9">
    <h3 id="clickedName">Video</h3>
    <div>

{{--        <div class="displayTag">--}}
{{--            <p><b>Video ID</p>--}}
{{--            <p><b>Video Type</p>--}}
{{--            <p><b>Description</p>--}}
{{--            <p><b>VideoUrl</p>--}}
{{--            <p><b>Date</p><p><b>Edit</p>--}}
{{--            <p><b>Delete</p>--}}
{{--        </div>--}}
{{--        @foreach($video as $p)--}}
{{--        <div class='displayTag1'>--}}
{{--            <p id='videoid'>{{$p["VideoID"]}}</p>--}}
{{--            <p id='vt{{$p["VideoID"]}}'>{{$p["Videotype"]}}</p>--}}
{{--            <p id='vd{{$p["VideoID"]}}'>{{$p["Description"]}}</p>--}}
{{--            <p id='vu{{$p["VideoID"]}}'>{{$p["VideoUrl"]}}</p>--}}
{{--            <p id='date{{$p["VideoID"]}}'>{{$p["Date"]}}</p>--}}
{{--            <div class='box'>--}}
{{--            <a  class='button' href='#popup1' onclick='btnEdit({{ $p["VideoID"] }})'> Edit </a>--}}
{{--            <a  class='button' href='#popup3' onclick='btnDelete({{ $p["VideoID"] }})'> Delete </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--        </div>--}}

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Video Name</th>
                <th scope="col">Video Description</th>
                <th scope="col">Video url</th>
                <th scope="col">Video date</th>
                <th scope="col">operataion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($video as $p)
                <tr>
                    <td id='videoid' >{{$p['VideoID']}} </td>
                    <td id='vt{{$p["VideoID"]}}'>{{ $p["Videotype"] }} </td>
                    <td id='vd{{$p["VideoID"]}}'>{{ $p["Description"]   }} </td>
                    <td id='vu{{$p["VideoID"]}}'>{{$p["VideoUrl"]}}</td>
                    <td id='date{{$p["VideoID"]}}'>{{ $p["Date"] }} </td>
                    <td>
                        <a  class='button' href='#popup1' onclick='btnEdit({{ $p["VideoID"] }})'> Edit </a>
                        <a  class='button' href='#popup3' onclick='btnDelete({{ $p["VideoID"] }})'> Delete </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

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
          <p>Do you really want to delete this Video??</p>
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
        <button  type="button" class="btn btn-primary" id="iddButton" href='#popup2' onclick="openpop()">
            Add
        </button>
        </div>
    </div>
    </div>

</div>


    <script>
      function btnEdit(x)
      {
        vt=document.getElementById("vt"+x).innerHTML;
        vd=document.getElementById("vd"+x).innerHTML;
        vu=document.getElementById("vu"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;

        document.getElementById('vid').value=x;
        document.getElementById('videotype').value=vt;
        document.getElementById('videoUrl').value=vu;
        document.getElementById('videodescription').value=vd;
        document.getElementById('date').value=date.trim();
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
@endsection


@section('footer')
    @parent
@endsection
