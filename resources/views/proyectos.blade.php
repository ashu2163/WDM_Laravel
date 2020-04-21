<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>proyectos</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('style/mijares.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/popupWindows.js') }}"></script>

</head>
<body>

<div class="nav-container" id="myTopnav">
    <img src="image/logo.png">
    <a href="./forms/create" >inicio</a>
    <a href="./semblanza">semblanza</a>
    <a href="./centro_augusto">centro augusto mijares</a>
    <a href="./proyectos" style="color: #454cde">proyectos</a>
    <a href="./eventos">eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="./videos">videos</a>
    <a href="./equipo">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
</div >
<div id="wrapper" class="proyectos">   
    
    
    @foreach($projs as $p)
     
    <div id="row1">
    <img style="width: 500px ; height: 400px" src="{{$p['imgUrl'] }}"  alt="" />
    <div style="vertical-align: top">
        <h3> {{ $p["ProjectName"] }}
        <p>description:<p>
        <p> {{$p["ProjectDescription"] }}
        </p>
    </div>
</div>
    @endforeach
    </table>
    
    
    

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
</body>
</html>
<script type="text/javascript" src="{{ URL::asset('Js/afterOnload.js') }}"></script>