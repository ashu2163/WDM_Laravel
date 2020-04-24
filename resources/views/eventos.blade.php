
@extends('app')

@section('title', 'centro_augusto')

@section('header')
    @parent

@endsection

@section('content')

    @foreach($event as $p)

{{--        <div id="row1">--}}
{{--            <div style="vertical-align: top">--}}
{{--                <h3> {{ $p["EventType"] }}</h3>--}}
{{--                <p>description:</p>--}}
{{--                <p> {{$p["EventDescription"] }}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <img style="width: 500px ; height: 400px" src="{{$p['EventUrl'] }}"  alt="" />--}}
{{--        </div>--}}

<div class="card shadow mb-5 p-3" style="max-width: 7200px;margin-top: 40px">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{$p['EventUrl'] }}" class="card-img shadow" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$p["EventType"]}}</h5>
                <p class="card-text">{{$p["EventDescription"] }}</p>
                <p class="card-text"><small class="text-muted">{{$p['Date'] }}</small></p>
            </div>
        </div>
    </div>
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


