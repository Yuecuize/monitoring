<style>
    html
    {
        height: 0px;
    }
    table
    {
        font-size: 8px;
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #eee;
        text-align: center;


    }
    .root table th, .root table td {
        text-align: center;
    }

    .root table th {
        background: #999;
        color: #fff;
    }

    .root table td {
        border-bottom: 1px solid #eee;
    }

    .root table td.row-title {
        font-weight: bold;
    }


    .root
    {
        page-break-before: always;
        width: 520px;

    }

    .root:first-child {
        page-break-before: auto;
    }
    .char
    {
        height: 350px;
        width: 625px;
        margin-left: -30px;

    }
</style>


<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /><body>
<div class="root">
    <div id="chardiv0" class="char"></div>
    <div id="table0">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData0(){return([{"date":"2017-08-09","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"08h00","y":0,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"09h00","y":8,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"10h00","y":21,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"11h00","y":28,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"12h00","y":29,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"13h00","y":40,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"14h00","y":38,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"15h00","y":33,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"16h00","y":43,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"17h00","y":33,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"18h00","y":31,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"19h00","y":28,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"20h00","y":8,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-09","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data0 = getData0();
    var chart = AmCharts.makeChart("chardiv0", {
        "dataProvider":data0,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data0[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data0[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table0',
        data:{
            datas : data0
        }
    })
</script><body>
<div class="root">
    <div id="chardiv1" class="char"></div>
    <div id="table1">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData1(){return([{"date":"2017-08-10","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"08h00","y":0,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"09h00","y":1,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"10h00","y":4,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"11h00","y":5,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"12h00","y":8,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"13h00","y":13,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"14h00","y":8,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"15h00","y":12,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"16h00","y":12,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"17h00","y":9,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"18h00","y":9,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"19h00","y":7,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"20h00","y":2,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-10","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data1 = getData1();
    var chart = AmCharts.makeChart("chardiv1", {
        "dataProvider":data1,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data1[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data1[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table1',
        data:{
            datas : data1
        }
    })
</script><body>
<div class="root">
    <div id="chardiv2" class="char"></div>
    <div id="table2">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData2(){return([{"date":"2017-08-11","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"08h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"09h00","y":2,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"10h00","y":2,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"11h00","y":11,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"12h00","y":25,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"13h00","y":29,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"14h00","y":32,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"15h00","y":36,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"16h00","y":46,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"17h00","y":28,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"18h00","y":28,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"19h00","y":8,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"20h00","y":2,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-11","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data2 = getData2();
    var chart = AmCharts.makeChart("chardiv2", {
        "dataProvider":data2,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data2[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data2[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table2',
        data:{
            datas : data2
        }
    })
</script><body>
<div class="root">
    <div id="chardiv3" class="char"></div>
    <div id="table3">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData3(){return([{"date":"2017-08-12","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"08h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"09h00","y":2,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"10h00","y":5,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"11h00","y":8,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"12h00","y":11,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"13h00","y":19,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"14h00","y":21,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"15h00","y":18,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"16h00","y":14,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"17h00","y":11,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"18h00","y":11,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"19h00","y":14,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"20h00","y":7,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-12","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data3 = getData3();
    var chart = AmCharts.makeChart("chardiv3", {
        "dataProvider":data3,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data3[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data3[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table3',
        data:{
            datas : data3
        }
    })
</script><body>
<div class="root">
    <div id="chardiv4" class="char"></div>
    <div id="table4">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData4(){return([{"date":"2017-08-13","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"08h00","y":0,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"09h00","y":3,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"10h00","y":7,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"11h00","y":13,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"12h00","y":21,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"13h00","y":49,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"14h00","y":50,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"15h00","y":56,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"16h00","y":34,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"17h00","y":43,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"18h00","y":40,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"19h00","y":22,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"20h00","y":14,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-13","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data4 = getData4();
    var chart = AmCharts.makeChart("chardiv4", {
        "dataProvider":data4,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data4[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data4[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table4',
        data:{
            datas : data4
        }
    })
</script><body>
<div class="root">
    <div id="chardiv5" class="char"></div>
    <div id="table5">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData5(){return([{"date":"2017-08-14","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"08h00","y":1,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"09h00","y":6,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"10h00","y":11,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"11h00","y":18,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"12h00","y":44,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"13h00","y":52,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"14h00","y":50,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"15h00","y":53,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"16h00","y":41,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"17h00","y":26,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"18h00","y":30,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"19h00","y":34,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"20h00","y":13,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-14","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data5 = getData5();
    var chart = AmCharts.makeChart("chardiv5", {
        "dataProvider":data5,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data5[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data5[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table5',
        data:{
            datas : data5
        }
    })
</script><body>
<div class="root">
    <div id="chardiv6" class="char"></div>
    <div id="table6">
        <table>
            <tr>
                <th> data</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData6(){return([{"date":"2017-08-15","x":"00h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"01h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"02h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"03h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"04h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"05h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"06h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"07h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"08h00","y":1,"color":"#ea00ff","unit":"kWh","qf":50,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"09h00","y":9,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"10h00","y":7,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"11h00","y":3,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"12h00","y":1,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"13h00","y":22,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"14h00","y":50,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"15h00","y":34,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"16h00","y":22,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"17h00","y":9,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"18h00","y":13,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"19h00","y":20,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"20h00","y":6,"color":"#ea00ff","unit":"kWh","qf":100,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"21h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"22h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null},{"date":"2017-08-15","x":"23h00","y":null,"color":"#ea00ff","unit":"kWh","qf":0,"tz":"Europe\/Brussels","iv":false,"url":null}]);};
    var data6 = getData6();
    var chart = AmCharts.makeChart("chardiv6", {
        "dataProvider":data6,
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data6[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data6[0].unit,
            "minimum": 0,
            "stackType": "regular",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "x",
        "numberFormatter" : {
            precision:-1,
            decimalSeparator:".",
            thousandsSeparator:""
        },
        "categoryAxis": {
            "dashLenth": 1,
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "graphs": [{
            "fillColorsField": "color",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "valueField": "y",
            "hideBulletsCount": 50,
            "useLineColorForBulletBorder" : true,
            "colorField" : "color",
            "lineColorField" : "color",
            "balloonText" :"<span style='font-size:11px;'>[[y]] [[unit]]</span>",
            "urlField" : "url"

        }],
    });
</script>

<script>
    var app = new Vue({
        el:'#table6',
        data:{
            datas : data6
        }
    })
</script>