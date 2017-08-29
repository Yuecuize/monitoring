<?php
    print_r(date("h:i:sa"));
    print("\n");
    $i = 10;
    $sys1 ="php artisan laravel:graphic ".$i;
print_r($sys1);
    $sys2 ="phantomjs mult.js test"."$i".".pdf";
print_r($sys2);
system($sys1);
print_r("sys1 compelete");
system($sys2,$out);
    $path = "/home/vagrant/website/Themes/Flatly/views/partials";
    unlink($path."/graphic.blade.php");
    print_r(date("h:i:sa"));
    print_r("compelet!");
    print("\n");

?>