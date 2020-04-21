<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" names="viewport" content="width=device-width">
    <title>Inicio</title>
    <cookie-value></cookie-value>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('style/mijares.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/popupWindows.js') }}"></script>
</head>
<body>


<div class="nav-container" id="myTopnav">
    <img src="{{ URL::asset('image/logo.png') }}">
    <a href="./forms/create"  style="color: #454cde">inicio</a>
    <a href="./../semblanza">semblanza</a>
    <a href="./../centro_augusto">centro augusto mijares</a>
    <a href="./../proyectos">proyectos</a>
    <a href="./../eventos">eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="./../videos">videos</a>
    <a href="./../equipo">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a  onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
    <i class="fa fa-bars"></i>
    </a>

</div >
<div id="wrapper" class="inicio">
<div>
    <div class="titleLogo">
        <img src="image/logo.png" alt="">
        <h1>CENTRO AUGUSTO MIJARES</h1>
        <h2>DESARROLLO HUMANO SUSTENTABLE</h2>
    </div>

    <div class="description">
        <h2>BIENVENIDA</h2>
        <p> Bienvenidos a este espacio del Centro Augusto Mijares, Asociación Civil sin fines de
            lucro centrada en el tema de la Responsabilidad Social, con énfasis en la realidad
            venezolana. En esta página encontrarás información alusiva al epónimo, Augusto Mijares,
            su trayectoria profesional, sus aportes en el campo específico de la educación y sus obras.
            También podrás conocer sobre el Centro: misión, valores, líneas de trabajo, proyectos en
            ejecución y actividades realizadas. Además, esta página web cuenta con enlaces directos para
            comunicarte vía mensajería con los integrantes del Centro, buscar información sobre temas
            específicos, acceder a una lista de blogs sobre la responsabilidad social y ubicar otras
            instituciones interesadas por el tema de la responsabilidad social. Con esta página web,
            esperamos unirnos al grupo de personas que, tanto en Venezuela como en otras partes del
            mundo, están aportando sus ideas en pro de un desarrollo humano sustentable.</p>
    </div>
</div>

    <div class="descriptionBottom">
        <img src="image/logo.png" alt="">
        <h2>PROPÓSITO</h2>
        <p>El Centro Augusto Mijares está conformado por un grupo de profesionales que asesoran en la
            ejecución de proyecto enmarcados en el tema de la Responsabilidad Social - Desarrollo
            Humano Sustentable. Actualmente, no cuenta con una página web para la difusión de su
            labor y producción. De allí que haya optado por colaborar con esta institución,
            elaborando este espacio web que funcionará como medio de interacción con el público en general.
            Concretamente, el propósito es dar respuesta a esta carencia que afecta el establecimiento de una
            comunicación más efectiva, en atención a la incidencia que, actualmente, tienen las TIC en todos
            los ámbitos de las relaciones humanas. Además, se espera que este medio constituya un enlace para
            establecer alianzas y generar, de manera colaborativa, nuevas propuestas para la elaboración de
            futuros proyectos en ámbitos diversos, como el ambiente, el turismo, la gerencia empresarial,
            la educación universitaria, entre otros.</p>
    </div>

<div class="videoDescription-container">

    <div class="center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0o9ULJAt7cA" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
        </iframe>
            <div class = "descriptionVieo">
                    <h2>OBJETIVOS</h2>
                    <ol>
                        <li>Funcionar como punto de información en el tema de la Responsabilidad Social.</li>
                        <li>  Establecer alianzas en línea para la realización de actividades en por del desarrollo humano ustentable.</li>
                        <li> Dar a conocer los trabajos realizados, en el campo de la Responsabilidad Social - Desarrollo Sustentable,</li>
                        por los miembros del Centro Augusto Mijares y otras personas interesadas en el tema.</li>
                        <li>  Funcionar como un centro de información para la reflexión sobre el tema de la Responsabilidad Social.</li>
                        <li>Nota en el punto objetivos se uso ula lista esto no se hizo a mano.</li>
                </ol>
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

</div>
<div id="LoginWindow"></div>
<div id="RegisterWindow"></div>

</body>
</html>
<script type="text/javascript" src="Js/afterOnload.js">
</script>


