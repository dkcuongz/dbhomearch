@extends('layouts.frontend')
@section('title', $interior->title)
@section('content_header')
    <h1 class="m-0 text-dark">{{$interior->title}}</h1>
@stop
@section('content')
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col text-center">
                <div class="col-inner">
                    <div class="img-description">
                        {!! $interior->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
