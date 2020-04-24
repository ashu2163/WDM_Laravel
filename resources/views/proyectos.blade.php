
@extends('app')

@section('title', 'proyetos')

@section('header')
    @parent

@endsection

@section('content')

    <div class="container">
    @foreach($projs as $p)
{{--            <div class="row">--}}
{{--                <div class="col-md">--}}
{{--                                    <img  src="{{$p['imgUrl'] }}"  alt="" />--}}
{{--                </div>--}}
{{--                <div class="col-md">--}}
{{--                                        <h3> {{ $p["ProjectName"] }}</h3>--}}
{{--                                        <p>description:<p>--}}
{{--                                        <p> {{$p["ProjectDescription"] }}--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="card  mb-5" style="max-width: 720px;margin: 0 auto">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <img src="{{$p['imgUrl'] }}" class="card-img" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">{{ $p["ProjectName"] }}</h5>--}}
{{--                            <p class="card-text">Description:{{$p["ProjectDescription"] }}</p>--}}
{{--                            <p class="card-text"><small class="text-muted">Date:{{$p["Date"] }}</small></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="jumbotron shadow p-3 bg-lightpurpl" style="margin: 40px">
                <h1 class="display-4">{{ $p["ProjectName"] }}</h1>
                <img src="{{$p['imgUrl'] }}" class="img-fluid" alt="Responsive image">
                <p class="lead">update:{{$p["Date"]}}</p>
                <hr class="my-4">
                <p>{{$p["ProjectDescription"]}}</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>

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
