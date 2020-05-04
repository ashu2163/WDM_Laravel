
@extends('app')

@section('title', 'centro_augusto')

@section('header')
    @parent

@endsection

@section('content')
    <div class="row">
        @php
            $index =  0;
        @endphp
    @foreach($video as $p)


            @if($index === 3)

        </div>
        <div class="row">
            @php
                $index = 0;
            @endphp
            @endif
            <div class="col-md bg-lightpurple w-100 p-3" style="height: 80%">
                <video width="320" height="150" controls="controls">
                    <source src="{{ $p['VideoUrl'] }}" type="video/mp4">
                </video>
                <h4>{{$p["VideoType"]}} </h4>
                <p>{{$p["VideoDescription"]}} </p>

            </div>
            @php
                $index ++;
            @endphp

    @endforeach
        </div>
@endsection


@section('footer')
    @parent
@endsection

<div id="LoginWindow"></div>
<div id="RegisterWindow"></div>

<script type="text/javascript" src="Js/afterOnload.js">
</script>


