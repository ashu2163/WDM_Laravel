<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>centro augusto mijares</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('style/mijares.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/popupWindows.js') }}"></script>

</head>
<body>

    <div class="nav-container" id="myTopnav">
        <img src="image/logo.png">
        <a href="./index" >inicio</a>
    <a href="./semblanza" >semblanza</a>
    <a href="./centro_augusto" style="color: #454cde">centro augusto mijares</a>
    <a href="./proyectos">proyectos</a>
    <a href="./eventos">eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="./videos">videos</a>
    <a href="./equipo">equipo</a>
        <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="adminproject" id="userTag" style="display: none">User</a>
        <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

<div id="wrapper" class="mijares">
<div class="row1-container">
    <div class="mision-container">

        <h1>MISIÓN</h1>

        <p>
            Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad,
            a la vez que adoptamos hábitos, formulamos estrategias y desarrollamos procesos que nos ayudan
            a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.
        </p>
    </div>
    <div class="vision-container">
        <h1>VISIÓN</h1>
        <p>El CENTRO AUGUSTO MIJARES aspira ser reconocido, a nivel nacional, como una organización de excelencia, comprometida con el desarrollo sustentable de la comunidad.</p>
    </div>
</div>

<div class="row2-container">
    <div class="valores-container">
        <img src="image/logo.png">
        <h2>VALORES</h2>
        <p>Dentro de nuestro pensamiento estratégico, los Valores son el verdadero poder: nos ayudan a aclarar nuestra Misión como
            organización y como personas; purifican e inspiran nuestra Visión y nos impulsan en cada actividad del desempeño organizacional.
            Inspirados en el pensamiento del Profesor Augusto Mijares, asumimos como nuestros los ideales de Justicia, el Bien, la Belleza y
            la Verdad; y los valores de RESPONSABILIDAD SOCIAL, SOLIDARIDAD, CONSTANCIA, CORRESPONSABILIDAD, LIBERTAD, Y FRATERNIDAD.</p>
    </div>
</div>

<div class="row3-container">
    <div class="Row-container">
            <div class="smallblock" >
                <h2>RESPONSABILIDAD SOCIAL</h2>
                <p>Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad, a la vez que adoptamos hábitos,
                    formulamos estrategias y desarrollamos procesos que nos ayudan a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.
                </p>
            </div>
            <div class="smallblock" >
                <h2>FRATERINIDAD</h2>
                <p>
                    Promovemos la unión, tolerancia y respeto a las diferencias entre
                    los miembros que conforman una sociedad, conviviendo y actuando unidos en pos del bien común, y compartiendo sus experiencias de vida.
                </p>
            </div>


        <div class="smallblock" >
        <h2>LIBERTAD</h2>
            <p>
                La asumimos como la capacidad de elegir responsablemente la dirección de nuestras vidas.
                Implica el conocer y diferenciar entre el bien y el mal y proceder de acuerdo a nuestra conciencia, creencias y aspiraciones.
            </p>
        </div>

    </div>
    <div class="Row-container">
        <div class="smallblock" >
            <h2>CORRESPONSABILIDAD</h2>
            <p>
                Participamos conjuntamente con empresas, instituciones, organizaciones e
                individuos para impulsar iniciativas en pro del  desarrollo humano y del desarrollo sustentable de la comunidad.
            </p>
        </div>
        <div class="smallblock" >
            <h2>SOLIDARIDAD</h2>
            <p>
                Actuamos desinteresadamente y con plena de alegría en favor de otras personas, teniendo en cuenta la utilidad y la necesidad del aporte para estas personas.
            </p>
        </div>


        <div class="smallblock" >
            <h2>CONSTANCIA</h2>
            <p>
                Tenemos perseverancia y hacemos esfuerzo constante para alcanzar nuestros objetivos y metas. Comenzamos
                una y otra vez para corregir errores y superar obstáculos. Se asume lo dicho por Simón Bolívar en el Manifiesto
                de Cartagena: “(…) el valor, la habilidad y la constancia corrigen la mala fortuna” - Citado por Augusto Mijares
                en la obra El Libertador.
            </p>
        </div>

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
</body>
</html>
<script type="text/javascript" src="Js/afterOnload.js"></script>