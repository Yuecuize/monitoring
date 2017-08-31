<style>
    table
    {
        font-size: 8px;
        width: 100%;
        border-collapse: collapse;
        border: 1px solid black;
        text-align: center;
        height: 300px;

    }
    td
    {
        width: 25%;
        border: 1px solid black;

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

<script>
    $(document).ready(function() {
        $("div.root:last").css("page-break-after", "auto");
        });

</script>
