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
                <a href="./adminproject" id="project">Project</a>
                <a href="./adminevent" id="event">Event</a>
                <a href="./contacts" id="contact">Contact</a>
                <a href="./adminvideo" id="video">Videos</a>
                @if($role =='Admin')
                    <a href="./messages" id="video">Messages</a>
                @endif
            </div>
        </div>


        <div class="col-9">
            <h3 id="clickedName">Message for adamin</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Email From</th>
                        <th scope="col">Message</th>
                        <th scope="col">operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mess as $p)
                        <form action="messages" method="post">
                        <tr>
                            <input type="text" id="id" name="id" value='{{$p["id"]}}' hidden>
                            <td id='eid{{$p["id"]}}'>{{$p["EmailID"]}} </td>
                            <td id='msgid{{$p["id"]}}'>{{$p["Message"]}} </td>
                            <td>
                                <button type="submit"  class="btn btn-primary" class='button'> Mark as Read!!</button>
                            </td>
                        </tr>
                        </form>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--    <div class="table_container">--}}
    {{--        <h3 id="clickedName">Event</h3>--}}
    {{--        <div>--}}
    {{--        --}}
    {{--            <div class="displayTag">--}}
    {{--                <!-- <p ><b>User ID</p> -->--}}
    {{--                <p style='padding-right:60px;' ><b>Email From</p>--}}
    {{--                <p style='padding-left:60px;' ><b>Message</p>--}}
    {{--            </div>--}}
    {{--            @foreach($mess as $p)--}}
    {{--            <div class='displayTag1' id='ajx'>--}}
    {{--            <form action="messages"  method="post">--}}
    {{--            <input type="text" id="id" name="id" value='{{$p["id"]}}' hidden></input>--}}
    {{--            <p id='eid{{$p["id"]}}' style='padding-right:60px;' > {{$p["EmailID"]}}</p>--}}
    {{--            <p id='msgid{{$p["id"]}}' style='padding-left:60px;'>{{$p["Message"]}}</p>--}}
    {{--            <div class='box'>--}}
    {{--            <button  class='submit' style='width:150px; text-align:center;'> Mark as Read!!</a>--}}
    {{--            </form>--}}
    {{--            </div>--}}
    {{--        @endforeach--}}
    {{--            </div>--}}
    <script>
        function btnMark(x) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    alert("Marked as read");
                    document.getElementById('ajx').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "./markread?id=" + x, true);
            xhttp.send();
        }
    </script>


@endsection


@section('footer')
    @parent
@endsection


