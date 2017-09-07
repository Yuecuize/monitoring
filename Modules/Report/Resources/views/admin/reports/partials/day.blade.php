@section('box_body')

    <div class="panel panel-primary">
        <div class="panel-heading">Get Data by day for a Device</div>
        <div class="panel-body">
            <div>
                {!!Form::open(['route' => ['admin.report.reports.pdfByDay'], 'method' => 'post'])!!}

                <div class="container">
                    <div class='col-md-5 datetime1' >
                        <div class="form-group datetime1" >
                            <div class='input-group date' id='datetimepicker6'>
                                {!! Form::text('date1',null,array('class'=>'form-control','name'=>'date1','readonly','placeholder'=>'click the right button')) !!}
                                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                            </div>
                        </div>
                        {!! $errors->first('date1','<small class="help-block" id="data_error">:message</small>') !!}
                    </div>
                    <div class="col-md-1 select-to">
                        <p>to</p>
                    </div>
                    <div class='col-md-5'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker7'>
                                {!! Form::text('date2',null,array('class'=>'form-control','name'=>'date2','readonly','placeholder'=>'click the right button')) !!}
                                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                            </div>
                        </div>
                        {!! $errors->first('date2','<small class="help-block" id="data_error">:message</small>') !!}
                    </div>
                </div>
            </div>
            <div>


            </div>
            <div>
                {!! Form::label('device1','Device No.1') !!}
                {!! Form::radio('device', '1',array('id'=>'device1')) !!}
            </div>
            <div>
                {!! Form::label('device2','Device No.2') !!}
                {!! Form::radio('device', '2',array('id'=>'device2')) !!}

            </div>
            <div>
                {!! Form::label('device3', 'Device No.3') !!}
                {!! Form::radio('device', '3',array('id'=>'device3')) !!}
            </div>


            <div>
                {!! Form::label('device4', 'Device No.4') !!}
                {!! Form::radio('device', '4',array('id'=>'device4')) !!}
            </div>
            {!! Form::submit('Envoyer!') !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@include('report::admin.reports.index')

<script>
    $(function () {
        $('#datetimepicker6').datetimepicker({
            viewMode: 'days',
            format:'YYYY-MM-DD'
        });
        $('#datetimepicker7').datetimepicker({
            viewMode: 'days',
            format:'YYYY-MM-DD',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").setMinDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").setMaxDate(e.date);
        });
    });
</script>
