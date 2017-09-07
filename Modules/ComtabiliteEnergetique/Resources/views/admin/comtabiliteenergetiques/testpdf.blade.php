<html>
test test test
  <head>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

    <!-- Chart code -->
    <script>

      var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "light",
        "marginRight":80,
        "autoMarginOffset":20,
        "lineColor" : "red",
        "dataDateFormat": "YYYY-MM-DD HH:NN",
        "dataProvider": [{
          "date": "2012-01-01",
          "value": 0.8,
          "surco" : 0.2,
          "colorDeux": "red"
        }, {
          "date": "2012-01-02",
          "value": 2.5,
          "surco" : 0.5,
          "colorDeux": "red"
        }, {
          "date": "2012-01-03",
          "value": 4
        }, {
          "date": "2012-01-04",
          "value": 5.8,
          "surco" : 0.2,
          "colorDeux": "red"
        }, {
          "date": "2012-01-05",
          "value": 7
        }, {
          "date": "2012-01-06",
          "value": 9
        }, {
          "date": "2012-01-07",
          "value": 10
        }, {
          "date": "2012-01-08",
          "value": 11
        }, {
          "date": "2012-01-09",
          "value": 12
        }, {
          "date": "2012-01-10",
          "value": 15
        }, {
          "date": "2012-01-11",
          "value": 17.5,
          "surco" : 1.5,
          "colorDeux": "red",
          "lineColor": "red"
        }, {
          "date": "2012-01-12",
          "value": 19,
          "surco": 2,
          "colorDeux": "red"
        }, {
          "date": "2012-01-13",
          "value": 20.75,
          "surco" :1.25 ,
          "colorDeux": "red"
        }, {
          "date": "2012-01-14",
          "value" : 22.35,
          "surco" : 0.65,
          "colorDeux" : "red"
        }, {
          "date": "2012-01-16 00",
          "valueFin": 25
        }, {
          "date": "2012-01-16",
          "color": "CC0000",
          "infoUne": 13,
          "infoDeux" : 12
        }],
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
        "trendLines": [{// la moyenne (en rouge sur le graphe)
          "id" : "moyenne",
          "finalDate": "2012-01-16 02",
          "finalValue": 25,
          "initialDate": "2012-01-01",
          "initialValue": 0,
          "lineColor": "#CC0000",
          "fillAlpha" : "0.1",
          "fillToGraph" : "graph"
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
          "enabled": true
        }
      });

    </script>

  </head>
<!-- HTML -->
  <body>
    <div id="chartdiv" style="height:500px"></div>


  </body>
</html>