@extends('layouts.frontend')

@section('title', 'Dự án')

@section('content_header')
    <h1 class="m-0 text-dark">Dự án</h1>
@stop

@section('content')
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col text-center">
                <div class="col-inner">
                    <div class="img-description">
                        {!! $project->description ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
