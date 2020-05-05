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

    <div class="vertical-menu">
        <a href="./adminproject" id="project" >Project</a>
        <a href="./adminevent" id="event" >Event</a>
        <a href="./contacts" id="contact" >Contact</a>
        <a href="./adminvideo" id="video" >Videos</a>
        @if($role =='Admin')
        <a href="./messages" id="video" >Messages</a>
        @endif

    </div>
    <div class="table_container">
        <h3 id="clickedName" style="margin-left:350px;" >Contact Us</h3>
        <form action="contacts" name="form" method="post" class="form-container">
        @csrf
                <div style="margin-bottom:20px;">
                    <input type="text" id='name' name='name' style="height:25px; width:450px; margin-left:200px;" value={{$name}} required>

                </div>
                <div style="margin-bottom:20px;">
                    <input type='email' id='email' name='email' placeholder="Email" style="height:25px; width:450px; margin-left:200px;" required>

                </div>
                <div style="margin-bottom:20px;">
                    <textarea id="message" name='message' placeholder="Your message" style="height: 100px; width:450px; margin-left:200px;" required></textarea>
                </div>
            <button type="submit" class="btn btn-primary" style="height: 30px; width:150px; margin-left:350px;" >Send Message</button>

        </form>
    </div>


<script>
            function validateform()
            {
                var email = document.forms["form"]["email"];
                var msg = document.forms["form"]["message"];

                if (email.value == "" || msg.value == ""  || (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value) == false))
                {
                    if (email.value == "")
                    {
                        window.alert("Javascript Validation: Email is required.");
                    }

                    else if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value) == false))
                    {
                        window.alert("Javascript Validation: E-mail address is not in valid formet.");
                    }
                    if (msg.value == "")
                    {
                        window.alert("Javascript Validation: Message is required.");
                    }
                }
                return true;
            }
        </script>






    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>
    @endsection


@section('footer')
    @parent
@endsection



    </body>

    </html>


