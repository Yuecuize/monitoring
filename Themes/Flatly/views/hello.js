var page = require('webpage').create(),
    system = require('system'), output;

page.viewportSize = { width: 1024, height: 768 };
page.clipRect = { top: 0, left: 0, width: 1920, height: 960 };

// console.log('The default user agent is ' + page.settings.userAgent);
// page.settings.userAgent = "Mozilla/5.0 (Windows NT 6.0)  Chrome/29.0.1547.57 ";


// page.onCallback = function(data) {
//     if (data && data.secret && (data.secret === 'ghostly')) {
//         return randomData();
//     }
//     return 'DENIED!';
// }


//
// page.open('http://monitoring-assistance.app');







page.open('http://monitoring-assistance.app/en/graphic/generate', function (status) {
    if (status !== 'success') {
        console.log('Unable to access network');
    } else {
        output = system.args[1];
        page.render(output);
        }

    phantom.exit();
});
