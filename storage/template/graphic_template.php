<div id="chartdiv" style="height:500px"></div>
    <script>
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "light",
        "marginRight":80,
        "autoMarginOffset":20,
        "lineColor" : "red",
        "dataDateFormat": "YYYY-MM-DD HH:NN",
        "dataProvider":getData(),
        "graphs": [{
            "balloonText": "[[category]]<br><b><span style='font-size:14px;'>value:[[value]]</span></b>",
            //la partie au dessus de la moyenne
            "type" : "column",
            "dashLength": 3,
            "colorField":"color",
            "valueField": "value",
            "fillColors" : "green",
            "lineAlpha": 0.3,
            "fillAlphas": 0.8,
            "fixedColumnWidth": 15
        }, {
            "balloonText": "[[category]]<br><b><span style='font-size:14px;'>surco:[[surco]]</span></b>",
//          "bullet": "round", // la partie au dessus
            "type" : "column",
            "dashLength": 3,
            "colorField":"colorDeux",
            "valueField": "surco",
            "lineAlpha": 0.3,
            "fillAlphas": 0.8,
            "fixedColumnWidth": 15
        }, {
            "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
            "fillAlphas": 0.8,
            "labelText": "[[value]]", // 1ere partie du stack
            "lineAlpha": 0.3,
            "type": "column",
            "color": "#000000",
            "valueField": "infoUne",
            "fillToGraph" : "moyenne"
        },
            {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]", //2eme partie du stack
                "lineAlpha": 0.3,
                "type": "column",
                "color": "#000000",
                "valueField": "infoDeux"
            }],
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true
        },
        "valueAxes": [ {
            "stackType": "regular", //Permet le stacking
            "minimum": 0,
            "title" : "Votre consomation actuelle"
        }],
        "export": {
            "enabled": true,
            "menu": []
        }
    });

    function getData(){MYDATA};

    </script>
