<?php
/**
 * Created by PhpStorm.
 * User: yue
 * Date: 2017/6/27
 * Time: 10:51
 */

namespace Modules\Comtabiliteenergetique\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use PDF;

class PdfController extends Controller
{
    /**
     * 测试下载pdf，使用loadView()方法
     * @return mixed
     */
    public function testDownloadPdf()
    {
        $data = array('name'=>'SUCCESS');
        $pdf = PDF::loadView('test', $data);
        return $pdf->download('test.pdf');
    }

    /**
     * 测试web页面展示pdf，使用loadHTML()方法加载
     * @return mixed
     */
    public function testStreamPdf()
    {
        $html = '<html><head><title>Laravel</title><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\'/><style>body{  font-family: \'msyh\';  }  @font-face {  font-family: \'msyh\';  font-style: normal;  font-weight: normal;  src: url(http://www.testenv.com/fonts/msyh.ttf) format(\'truetype\');  }</style></head><body><div class=\'container\'><div class=\'content\'><p style=\'font-family: msyh, DejaVu Sans,sans-serif;\'>test</p><div style=\'font-family: msyh, DejaVu Sans,sans-serif;\' class=\'title\'>Laravel 5test</div><div  class=\'title\'>test3</div></div></div></body></html>';
        $pdf = PDF::loadHTML($html);
        return $pdf->stream();
    }

    public function show(){
        return view('test')->with('name','CuizeYUE');
    }
}