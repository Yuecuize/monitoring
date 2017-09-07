@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    @extends('layouts.master')


@section('content-header')
    <h1>
        {{ trans('comtabiliteenergetique::comtabiliteenergetiques.title.create comtabiliteenergetique') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.comtabiliteenergetique.comtabiliteenergetique.index') }}">{{ trans('comtabiliteenergetique::comtabiliteenergetiques.title.comtabiliteenergetiques') }}</a></li>
        <li class="active">{{ trans('comtabiliteenergetique::comtabiliteenergetiques.title.create comtabiliteenergetique') }}</li>
    </ol>
@stop

@section('styles')
    {!! Theme::script('js/vendor/ckeditor/ckeditor.js') !!}
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <style>
        #allchart div {
            height	: 500px;
        }
    </style>

@stop

@section('content')

    <body onload="">
    <div id="allchart">

        <div id="chartdiv" style="height:500px"></div>

    </div>
    {{--<p id="test">aaaaaa</p>--}}
    {{--<div>--}}
        {{--{!! Form::open(['route'=>['admin.comtabiliteenergetique.comtabiliteenergetiques.pdftest'],'method'=>'post']) !!}--}}
        {{--{!! Form::submit('PDFtest') !!}--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}

    {{--</body>--}}
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop


@stop
