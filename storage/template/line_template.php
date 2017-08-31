<body>
<div class="root">
    <p style="font-size: 5px">char{{x}}</p>
    <div id="chardiv{{x}}" class="char"></div>
    <div id="table{{x}}">
        <table>
            <tr>
                <th> data</th>
                <th> value</th>
<!--                <th> surco</th>-->
<!--                <th> colorDeux</th>-->
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.value }}</td>
<!--                <td>@{{ x.surco }}</td>-->
<!--                <td>@{{ x.colorDeux }}</td>-->
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    var datax = getData();
    var chart = AmCharts.makeChart("chardiv{{x}}", {
        "type": "serial",
        "theme": "light",
        "marginRight": 70,
        "marginLeft": 60,
//        "autoMarginOffset": 20,
        "mouseWheelZoomEnabled":true,
        "dataDateFormat": "YYYY-MM-DD",
        "valueAxes": [{
            "id": "v1",
            "axisAlpha": 0,
            "position": "left",
            "ignoreAxisWidth":true
        }],
        "balloon": {
            "borderThickness": 1,
            "shadowAlpha": 0
        },
        "graphs": [{
            "id": "g1",
            "balloon":{
                "drop":true,
                "adjustBorderColor":false,
                "color":"#ffffff"
            },
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 5,
            "hideBulletsCount": 50,
            "lineThickness": 2,
            "title": "red line",
            "useLineColorForBulletBorder": true,
            "valueField": "value",
            "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
        }],
        "chartScrollbar": {
            "graph": "g1",
            "oppositeAxis":false,
            "offset":30,
            "scrollbarHeight": 80,
            "backgroundAlpha": 0,
            "selectedBackgroundAlpha": 0.1,
            "selectedBackgroundColor": "#888888",
            "graphFillAlpha": 0,
            "graphLineAlpha": 0.5,
            "selectedGraphFillAlpha": 0,
            "selectedGraphLineAlpha": 1,
            "autoGridCount":true,
            "color":"#AAAAAA"
        },
        "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha":1,
            "cursorColor":"#258cbb",
            "limitToGraph":"g1",
            "valueLineAlpha":0.2,
            "valueZoomable":true
        },
//        "valueScrollbar":{
//            "oppositeAxis":false,
//            "offset":50,
//            "scrollbarHeight":10
//        },
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true,
            "dashLength": 1,
            "minorGridEnabled": true
        },
        "export": {
            "enabled": true,
            "menu": []
        },
        "dataProvider":  datax

    });

    chart.addListener("rendered", zoomChart);

    zoomChart();

    function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
    }

</script>


<script>
    var app = new Vue({
        el:'#table{{x}}',
        data:{
            datas : datax
        }
    })
</script>