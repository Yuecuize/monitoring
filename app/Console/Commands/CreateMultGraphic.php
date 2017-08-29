<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateMultGraphic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:multgraphic {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to make mult graphics';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $num = $this->argument('number');
        $path1 = storage_path()."/template";
        $filename = $path1."/multgraphic_template.php";
        $path2 = "/home/vagrant/website/Themes/Flatly/views/partials";

        $template = file_get_contents($path1."/template.php");
        $find_data = "{MYDATA}";
        $data = $this->getData();
        $graphic_template = str_replace($find_data,$data,$template);
        $fp = fopen($path2."/multgraphic.blade.php","a");
        fwrite($fp,$graphic_template);
        fclose($fp);
        for($i=0;$i<$num;$i++)
        {
            $filename = $path1."/multgraphic_template.php";
            if(mt_rand (0,1) == 0)
            {
                $filename = $path1."/line_template.php";
            }
            $find_id = "{{x}}";
            $id_data = $i;
            $contents = file_get_contents($filename);
            $graphic = str_replace($find_id,$id_data,$contents);
            $fp = fopen($path2."/multgraphic.blade.php","a");
            fwrite($fp,$graphic);
            fclose($fp);

        }
    }

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
}
