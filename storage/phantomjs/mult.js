var page = require('webpage').create(),
    system = require('system'), output;
page.zoomFactor = 1;

 // page.viewportSize = { width: 1920  , height: 768 };
 // page.paperSize = {
 //     width:'1920px',
 //     height:'2715px',
 // };


page.viewportSize = { width: 640, height: 594 };
page.paperSize = {format: 'A4', orientation: 'portrait',margin:'1cm' };
// console.log('The default user agent is ' + page.settings.userAgent);
// page.settings.userAgent = "Mozilla/5.0 (Windows NT 6.0)  Chrome/29.0.1547.57 ";


// page.onCallback = function(data) {
//     if (data && data.secret && (data.secret === 'ghostly')) {
//         return randomData();
//     }b bbb
//     return 'DENIED!';
// }


//
// page.open('http://monitoring-assistance.app');







page.open('http://monitoring-assistance.app/en/graphic/generate', function (status) {
    if (status !== 'success') {
        console.log('Unable to access network');
    } else {
        output = system.args[1];
        page.render('/home/vagrant/website/storage/pdf/'+output);
        }

    phantom.exit();
});
