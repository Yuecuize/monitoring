
var page = require('webpage').create(),
    system = require('system'), output;
page.zoomFactor = 1;

page.viewportSize = { width: 640, height: 594 };
page.paperSize = {format: 'A4', orientation: 'portrait',margin:'1cm' };

page.open('http://monitoring-assistance.app/en/graphic/generate', function (status) {
    if (status !== 'success') {
        console.log('Unable to access network');
    } else {
        output = system.args[1];
        page.render(output);
        }

    phantom.exit();
});
