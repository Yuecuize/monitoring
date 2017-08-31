<body>
<div class="root">
    <p style="font-size: 5px">char{{x}}</p>
    <div id="chardiv{{x}}" class="char"></div>
    <div id="table{{x}}">
        <table>
            <tr>
                <th> data</th>
                <th> raw</th>
                <th> x</th>
                <th> y</th>
            </tr>
            <tr v-for="x in datas">
                <td>@{{ x.date }}</td>
                <td>@{{ x.raw }}</td>
                <td>@{{ x.x }}</td>
                <td>@{{ x.y }}</td>
            </tr>
        </table>
    </div>
</div>
</body>

<script>
    function getData{{x}}(){MYDATA};
    var data{{x}} = getData{{x}}();
    var chart = AmCharts.makeChart("chardiv{{x}}", {
        "dataProvider":data{{x}},
        "marginRight":80,
        "autoMarginOffset":20,
        "type": "serial",
        "theme": "light",
        "mouseWheelZoomEnabled": true,
        "valueAxes": [{
            "id": data{{x}}[0].unit,
            "axisAlpha": 1,
            "axisThickness" : 2,
            "position": "left",
            "unit": data{{x}}[0].unit,
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
        el:'#table{{x}}',
        data:{
            datas : data{{x}}
        }
    })
</script>