
@extends('app')

@section('title', 'Inicio')

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <p><b>Augusto Mijares</b> nació en Villa de Cura (estado Anzoátegui) el 12 de
                    noviembre de 1987, pero desde muy joven se residenció en la ciudad
                    de Caracas. Se graduó de Abogado en la Universidad Central de Venezuela
                    (UCV) en 1921 y también de Profesor en Geografía e Historia el año 1938.
                    De las dos carreras en la que se tituló, Mijares mostró predilección por
                    la de docente, inicándose como maestro de aula a los dicisiete años. En este
                    quehacer no solo se destacó por su práctica pedagógica, sino también por sus
                    aportes en las reformas de los programas de enseñanza, creación de las escuelas y
                    los cargos meritorios que ocupó en el sistema educativo, siendo de gran reconocimiento
                    su participación como Ministro de Educación en 1948.<br>
                    Este insigne educador, también fue un escritor destacado. En 1964 escribió su obra El Libertador,
                    considerada una de las mejores bioigrafías sobre Simón Bolívar.
                    Augusto Mijares, hoy día, sigue inspirando a muchos profesionales, especialmente a
                    docentes, que ejerciendo los valores de la "justicia, el bien, la belleza y la verdad", apuestn
                    por un aprendizaje que contribuya a potenciar las capacidades del estudiante y el docente, en plena sintonía
                    con las necesidades y características socio-culturales de la sociedad donde tiene lugar el hecho esducativo.
                </p>
            </div>
            <div class="col-md " >
                <img src="image/Augusto_Mijares.jpg" class="img-fluid" alt="Responsive image" >
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col" >
                <h2>APORTES PEDAGÓICOS DE AUGUSTO MIJARES</h2>
                <ol>
                    <li>.Formación en valores para construir el futuro del país.</li>
                    <li>Para formar en valores es necesario llegar a la dimensión “afectiva” del ser humano.</li>
                    <li>Educar en virtudes e integrar la afectividad y la razón.</li>
                    <li>La educación moral es una educación sentimental, actuar virtuosamente es
                        actuar desde una inclinación formada por el cultivo de las virtudes cívicas como la constancia y la probidad.</li>
                    <li>Integrar lo afirmativo venezolano en la educación.</li>
                </ol>
            </div>
            <div class="col-md-5 bg-lightpurple text-center"  >
                <h2>Obras</h2>
                <p class="bigger-line-height">
                    1.Augusto Mijares fue considerado como uno de los ensayistas más destacados del siglo XXI. Esta ha sido su obra:
                    <br>
                    2.La patria de los venezolanos (1750)
                    <br>
                    3.La interpretación pesimista de la sociología hispanoamericana(1938)
                    <br>
                    4.Hombres e ideas de América (1940)
                    <br>
                    5.Educación (1943)
                    <br>
                    6.La luz y el espejo (1955)
                    <br>
                    7.La ideología de revolución emancipadora (1961)
                    <br>
                    8.Lo afirmativo venezolano (1963)
                    <br>
                    9.El Libertador ( 1964)
                    <br>
                    10.La evolución política de Venezuela (1967)
                    <br>
                    11.Longitud y latitud (1971)
                </p>
            </div>
        </div>
    </div>
    @endsection


    @section('footer')
    @parent
    @endsection

    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>

<script type="text/javascript" src="Js/afterOnload.js">
</script>


