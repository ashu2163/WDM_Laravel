<html>
<head>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('style/mijares.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/popupWindows.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/User.js') }}"></script>
</head>
<body>
@section('header')
    <nav class="navbar   navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto  align-items-center">
                <li>
                    <a class="navbar-brand"  href="#">
                        <img src="image/logo.png">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./semblanza">semblanza</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./centro_augusto">centro_augusto</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./proyectos">proyectos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./eventos">eventos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://jxp8516.uta.cloud/wordpress/">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./videos">videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./equipo">equipo</a>
                </li>

                <span>
                    <a class="nav-link" data-toggle="modal" data-target="#loginModal">
                        login
                    </a>
                </span>
                <span>
                <a  class="nav-link" data-toggle="modal" data-target="#registerModal">
                    register
                </a>
                </span>


                <li class="nav-item dropdown">
                    <a id="userTag" style="display: none" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="adminproject">User center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onclick="signout()">Sign out</a>
                    </div>
                </li>


                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="adminproject" id="userTag" style="display: none">User</a>
                        </li>
                    </ul>



            </ul>
        </div>
    </nav>

<div class="container">
    @yield('content')
</div>

@section('footer')
    <style>
        .fa {
            width: 25px;

            font-size: 25px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            color: white;
            border-radius: 50%;

        }
        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
        }

        .fa-twitter {
            background: #55ACEE;
        }
        .fa-github {
            background: #000000;
        }

        .fa-dribbble {
            background: #ea4c89;
        }
    </style>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <text >Copyright @2020 all rights reserved | This template is made with <text id="name">❤</text> by <text id="name">Jimmy and ashu</text></text>
            <div  style="float: right">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-github"></a>
                <a href="#" class="fa fa-dribbble"></a>
            </div>
        </div>
    </footer>

@show

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<div class="modal fade" id="loginModal" name="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="alert alert-danger">          

@if($errors->login->any())
    <script>
        $(function() {
            $('#loginModal').modal({
                show: true
        });
    });
    </script>   
<ul>              
    @foreach ($errors->login->all() as $error)
        <li>{{ $error }}</li>              
    @endforeach           
</ul>
@endif
</div><br />


    <div class="modal-dialog" role="document">
        <div class="modal-content" id='login'>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body InieteDeSesiem">
                <img id = 'close' onclick='closePopupWindow()' src="image/close.png" >
                <form action="login" name="form1" method="POST">
                {{csrf_field()}}
                    <div class="content_container">
                        <img src="image/logo.png">
                        <h2>CENTRO AUGUSTO MIJARES </h2>
                        <h3>Iniciar Sesion</h3>
                        <div>
                            <input type="email" id="user"  name="Email" placeholder="Nombre de Usuario o Correo" >
                            <input type="password" id="password" name="password" placeholder="Contrasena">
                            <div>
                                <button class="submitbutton" type="submit" onclick="validate()" value="ENTRAR" id="submit" onclick="$('#loginModal').modal({'backdrop': 'static'});">ENTRAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- @if(count($errors) > 0)
<script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
</script>
@endif -->

    

<div class="modal fade bd-example-modal-xl" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="alert alert-danger">
@if($errors->register->any())
    <script>
        $(function() {
            $('#registerModal').modal({
                show: true
        });
    });
    </script>   
<ul>              
    @foreach ($errors->register->all() as $error)
        <li>{{ $error }}</li>              
    @endforeach           
</ul>
@endif
</div><br />   
    
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body Registru">
                <form action="user" name="form2" method="POST">
                {{csrf_field()}}
                    <div class="content_container">
                        <img src="image/logo.png">
                        <h4>Registro</h4>
                        <row>
                        <div class="col">
                            <div align=" left">
                                <div>
                                    <input placeholder="Nombre" name="Fname" > <input type="email" placeholder="Correo" name="Email" >
                                </div>
                                <div>
                                    <input type="password" placeholder="Contrasena" id="pass" name="password" onkeyup="check();"> <input type="password" placeholder="Repter Contrasena" id="con-pass" onkeyup="check();" name="password_confirmation" >
                                    <span id='message'></span>            
                                </div>
                                <div>
                                    <input style="width: 70%" placeholder="Direccion" name="address">
                                </div>
                                <div style="display: flex">
                                    <button type="submit" id="btn" onclick="validateReg" style="margin-left: 20px" >Guardar</button>
                                </div>
                            </div>

                        </div>
                        </row>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script type="text/javascript" src="Js/afterOnload.js">
</script>

<script>

    // active current page on navbar
    var url = window.location.pathname;
    var site = url.lastIndexOf("\/");
    var currentPath = url.substring(site + 1, url.length);
    var allpaths = document.getElementsByClassName("nav-link");
    for (var i = 0; i < allpaths.length; i++) {

        if(currentPath === allpaths[i].innerText ){
            console.log('active');
            allpaths[i].className += "active";
        }
    }
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
    }
</script>
