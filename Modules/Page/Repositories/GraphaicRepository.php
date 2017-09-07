<?php
/**
 * Created by PhpStorm.
 * User: yue
 * Date: 2017/7/20
 * Time: 16:23
 */

namespace Modules\Page\Repositories;


class GraphaicRepository
{
private function getData(){
    $data="{var date = new Array(16);
    var data = new Array();
    for(var i = 0; i < date.length;i++){
        var j = i + 1;
        if(j < 10){
            date[i] = \"2012-01-0\"+j;
        }else{
            date[i] = \"2012-01-\"+j;
        }
    }
    for(var i=0; i<date.length;i++){
        data[i] = {
            date: date[i],
            value: (Math.random() * 30).toFixed(2),
            surco: (Math.random()*2).toFixed(1),
            colorDeux: \"red\"
        }
    }
    return data;}";
    return $data;
}

public function fileopen(){
    $data = $this->getData();
    $path1 = storage_path()."/template";
    $filename = $path1."/graphic_template.php";
    $find = "{MYDATA}";
    $contents = file_get_contents($filename);
    $graphic = str_replace($find,$data,$contents);

    $path2 = "/home/vagrant/website/Themes/Flatly/views/partials";

    $fp = fopen($path2."/graphic.blade.php","a");
    fwrite($fp,$graphic);
    fclose($fp);
}

}