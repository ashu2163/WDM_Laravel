
@extends('app')

@section('title', 'centro_augusto')

@section('header')
    @parent

@endsection

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-md  ">

                <h1>MISIÓN</h1>

                <p>
                    Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad,
                    a la vez que adoptamos hábitos, formulamos estrategias y desarrollamos procesos que nos ayudan
                    a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.
                </p>
            </div>
            <div class="col-md ">
                <h1>VISIÓN</h1>
                <p>El CENTRO AUGUSTO MIJARES aspira ser reconocido, a nivel nacional, como una organización de excelencia, comprometida con el desarrollo sustentable de la comunidad.</p>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col">
                <img src="image/logo.png">
                <h2>VALORES</h2>
                <p>Dentro de nuestro pensamiento estratégico, los Valores son el verdadero poder: nos ayudan a aclarar nuestra Misión como
                    organización y como personas; purifican e inspiran nuestra Visión y nos impulsan en cada actividad del desempeño organizacional.
                    Inspirados en el pensamiento del Profesor Augusto Mijares, asumimos como nuestros los ideales de Justicia, el Bien, la Belleza y
                    la Verdad; y los valores de RESPONSABILIDAD SOCIAL, SOLIDARIDAD, CONSTANCIA, CORRESPONSABILIDAD, LIBERTAD, Y FRATERNIDAD.</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 5%">
                    <h2>RESPONSABILIDAD SOCIAL</h2>
                    <p>Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad, a la vez que adoptamos hábitos,
                        formulamos estrategias y desarrollamos procesos que nos ayudan a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.
                    </p>
                </div>
            </div>
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 5%">
                    <h2>FRATERINIDAD</h2>
                    <p>
                        Promovemos la unión, tolerancia y respeto a las diferencias entre
                        los miembros que conforman una sociedad, conviviendo y actuando unidos en pos del bien común, y compartiendo sus experiencias de vida.
                    </p>
                </div>
            </div>
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 8%">
                    <h2>LIBERTAD</h2>
                    <p>
                        La asumimos como la capacidad de elegir responsablemente la dirección de nuestras vidas.
                        Implica el conocer y diferenciar entre el bien y el mal y proceder de acuerdo a nuestra conciencia, creencias y aspiraciones.
                    </p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 8%">
                    <h2>RESPONSABILIDAD SOCIAL</h2>
                    <p>Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad, a la vez que adoptamos hábitos,
                        formulamos estrategias y desarrollamos procesos que nos ayudan a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.
                    </p>
                </div>
            </div>
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 8%">
                    <h2>SOLIDARIDAD</h2>
                    <p>
                        Actuamos desinteresadamente y con plena de alegría en favor de otras personas, teniendo en cuenta la utilidad y la necesidad del aporte para estas personas.
                    </p>
                </div>
            </div>
            <div class="col-md text-center bg-lightpurple">
                <div style="padding: 8%">
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

    </div>{{--end fo container--}}








@endsection


@section('footer')
    @parent
@endsection

<div id="LoginWindow"></div>
<div id="RegisterWindow"></div>
<script type="text/javascript" src="Js/afterOnload.js">
</script>


