var webPage = require('webpage');
var page = webPage.create();
var settings = {
    operation: "POST",
    encoding: "utf8",
    headers: {
        "Content-Type": "application/json"
    },
    data: JSON.stringify({
        some: "data",
        another: ["custom", "data"]
    })
};


page.open("http://monitoring-assistance.app/",settings,function (status) {
    console.log('Status:' + status);


});
