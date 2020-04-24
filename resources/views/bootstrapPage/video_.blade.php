
@extends('app')

@section('title', 'centro_augusto')

@section('header')
    @parent

@endsection

@section('content')

    @foreach($video as $p)
        @php
            $index =  0;
        @endphp
        <div class="flex">
            @if($index === 3)
        </div>
        <div class="flex" >';
            @php
                $index = 0;
            @endphp
            @endif
            <div class="card"  style="">
                <video width="400" height="315" controls="controls">
                    <source src="{{ $p['VideoUrl'] }}" type="video/mp4">
                </video>
                <h4>{{$p["Videotype"]}} </h4>
                <p>{{$p["Description"]}} </p>
            </div>
            @php
                $index ++;
            @endphp
        </div>
    @endforeach
@endsection


@section('footer')
    @parent
@endsection

<div id="LoginWindow"></div>
<div id="RegisterWindow"></div>

<script type="text/javascript" src="Js/afterOnload.js">
</script>


