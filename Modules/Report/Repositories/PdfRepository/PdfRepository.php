<?php namespace Modules\Report\Repositories\PdfRepository;

use Modules\Report\Repositories\ReportsRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use JonnyW\PhantomJs\Client;

class PdfRepository extends EloquentBaseRepository implements ReportsRepository
{
    public function generateGraphic($date_array,$range)
    {
        $path1 = "/home/vagrant/website/Themes/Flatly/views/partials";
        $date = date("h-i-sa");

        while(file_exists($path1."/graphic.blade.php")){
            unlink($path1."/graphic.blade.php");
        }

        $this->generateView($date_array,$range);
        $this->phantomjs(storage_path('pdf/'.$date.".pdf"));

//        shell_exec($sys);

//        while(!file_exists(storage_path('pdf/'.$date.".pdf")))
//        {
//            sleep(0.5);
//        }
        return($date.".pdf");
    }


    public function generateView($date_array,$range){
        $file1 = storage_path("template/template.php");
        $file2 = storage_path("template/multgraphic_template.php");
        $template1 = file_get_contents($file1);
        $path2 = "/home/vagrant/website/Themes/Flatly/views/partials";
        $fp = fopen($path2."/graphic.blade.php","a");
        fwrite($fp,$template1);
        fclose($fp);
        $num = 1;
        $date = $date_array[0];
        if($range == 1){
            $num = (strtotime($date_array[1]) - strtotime($date_array[0]))  / (60 * 60 * 24);
        };
        if($range == 2){
            $num = (strtotime($date_array[1]) - strtotime($date_array[0]))  / (60 * 60 * 24 * 30);
        };
        if($range == 3){
            $num = $date_array[1] - $date_array[0];
        };
        if($range == 4){
            $date = $date_array[0].'-'.$date_array[1];
        }

        for($i=0;$i<$num;$i++)
        {
            $find_id = "{{x}}";
            $find_data = "{MYDATA}";
            $template2 = file_get_contents($file2);

            if($range == 1){
                $data = $this->getDataByDay($date);
                $date_time = strtotime($date);
                $date_time = strtotime("+1 day",$date_time);
                $date = date('Y-m-d',$date_time);

            }
            if($range == 2){
                $data = $this->getDataByMonth($date);
                $date_time = strtotime($date);
                $date_time = strtotime("+1 month",$date_time);
                $date = date('Y-m',$date_time);

            }
            if($range == 3){
                $data = $this->getDataByYear($date);
                $date = $date + 1;
            }
            if($range == 4){
                $data = $this->getDataByYearRange($date);
            }

            $data = "{return(".$data.");}";
            $template2 = str_replace($find_id,$i,$template2);
            $template2 = str_replace($find_data,$data,$template2);
            $fp = fopen($path2."/graphic.blade.php","a");
            fwrite($fp,$template2);
            fclose($fp);
        }

    }

    public function phantomjs($name)
    {
        $client = Client::getInstance();
        $client->getEngine()->setPath('/usr/bin/phantomjs');


        $width  = 640;
        $height = 594;
        $top    = 0;
        $left   = 0;
        /**
         * @see JonnyW\PhantomJs\Http\PdfRequest
         **/
        $request = $client->getMessageFactory()->createPdfRequest('http://monitoring-assistance.app/en/graphic/generate', 'GET');
        $request->setOutputFile($name);
        $request->setFormat('A4');
        $request->setOrientation('portrait');

        /**
         * @see JonnyW\PhantomJs\Http\Response
         **/
        $response = $client->getMessageFactory()->createResponse();

        // Send the request
        $client->send($request, $response);
    }

    private function getDataByDay($date)
    {
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://www.monitoring-assistance.com/api/v1/devices/33/day/show?timeframe=".$date);
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
        return ($response);
    }

    private function getDataByMonth($date)
    {
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://www.monitoring-assistance.com/api/v1/devices/33/month/show?timeframe=".$date);
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
        return ($response);
    }

    private function getDataByYear($date)
    {
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://www.monitoring-assistance.com/api/v1/devices/33/year/show?timeframe=".$date);
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
        return ($response);
    }

    private function getDataByYearRange($date)
    {
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://www.monitoring-assistance.com/api/v1/devices/33/year-range/show?timeframe=".$date);
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
        return ($response);
    }
}
