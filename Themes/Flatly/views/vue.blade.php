<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
    <style>
        body {padding-top:40px;}
    </style>
</head>

<body>
<div id="root">

    <message title="Hello World" body="Good good study"></message>

</div>
<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    Vue.component('message', {
            data(){
                return{
                    isVisible:true
                };
            },
            props: ['title', 'body'],
            template: '<article class="message" v-show="isVisible">'+
                '<div class="message-header">'+
            '@{{title}}'+
                '<button type="button" @click="isVisible = false" >X</button>'+
        '</div>'+
        '<div class="message-body">'+
            '@{{body}}'+
    '</div>'+
    '</article>',
    })

    new Vue({
        el:'#root'
    })



</script>

</body>
</html>
