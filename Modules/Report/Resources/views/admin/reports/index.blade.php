@extends('layouts.master')


@section('content-header')
    <style>
        #data_error
        {
            color: red;
        }
        .select-to
        {
            margin-top: 3px;
        }
        .datetime1
        {
            margin-left: 2%;
        }

    </style>
    <!-- Include Required Prerequisites -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <h1>
        {{ trans('report::reports.title.reports') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('report::reports.title.reports') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary" style="text-align: center">

                <div class="box-header" style="font-size:20px;">

                    <select  @change="range_route($event)" style="width: 80%;text-align: center;" id="range">
                        <option v-for="option in options" v-bind:value = "option.route">@{{ option.value}}</option>
                    </select>
                </div>
                <!-- /.box-header -->
                <!-- /.box -->
                @yield('box_body')
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('report::reports.title.create reports') }}</dd>
    </dl>
@stop

@section('scripts')


    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
    <script>
        var test = new Vue({
            el:'#range',
            data: {
                selected: 'aaaa',
                options: [
                    {value:'select',route:''},
                    {value: 'Get Data by day for a Device',route:'<?= route('admin.report.reports.day') ?>'},
                    {value: 'Get Data by month for a Device',route:'<?= route('admin.report.reports.month') ?>'},
                    {value: 'Get Data by year for a Device',route:'<?= route('admin.report.reports.year') ?>'},
                    {value: 'Get Data by year range for a Device',route:'<?= route('admin.report.reports.year_range') ?>'}
                ]
            },
            methods: {
                range_route: function (event) {
                    this.selected = event.target.value;
                    window.location.href = this.selected;
                }
            }
        });

    </script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.report.reports.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>


@stop

