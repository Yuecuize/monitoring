var page = require('webpage').create(),
    system = require('system'), output;

page.viewportSize = { width: 1024, height: 768 };
page.clipRect = { top: 0, left: 0, width: 1920, height: 960 };

page.open('http://monitoring-assistance.app/en/graphic/generate', function (status) {
    if (status !== 'success') {
        console.log('Unable to access network');
    } else {
        output = system.args[1];
        page.render(output);
        }

    phantom.exit();
});
