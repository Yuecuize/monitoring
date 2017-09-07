<?php

 for($i=0;$i<300;$i++){
     $sys ="phantomjs hello.js test".$i.".pdf > test.txt";
     $sys2 ="php artisan laravel:graphic";
     exec($sys2);
     exec($sys,$out);
     $path = "/home/vagrant/website/Themes/Flatly/views/partials";
     unlink($path."/graphic.blade.php");
     print_r($i.":".date("h:i:sa"));
     print("\n");
 }

?>