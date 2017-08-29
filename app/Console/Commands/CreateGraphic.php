<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateGraphic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:graphic {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $fp = fopen($path2."/graphic.blade.php","a");
        fwrite($fp,$graphic_template);
        fclose($fp);
        for($i=0;$i<$num;$i++)
        {
            $filename = $path1."/multgraphic_template.php";
            $find_id = "{{x}}";
            $id_data = $i;
            $contents = file_get_contents($filename);
            $graphic = str_replace($find_id,$id_data,$contents);
            $fp = fopen($path2."/graphic.blade.php","a");
            fwrite($fp,$graphic);
            fclose($fp);

        }
    }

    private function getData(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://www.monitoring-assistance.com/api/v1/devices/33/day/show?timeframe=2017-07-04");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

//        curl_setopt($ch, CURLOPT_POSTFIELDS, timeframe);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer 7b675232-30c9-48a4-9b2a-977010b99a65"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return ("{return(".$response.");}");
    }
}
