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
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />