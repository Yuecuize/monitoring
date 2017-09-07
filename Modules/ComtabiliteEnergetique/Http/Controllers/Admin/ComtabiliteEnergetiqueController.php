<?php namespace Modules\ComtabiliteEnergetique\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ComtabiliteEnergetique\Entities\ComtabiliteEnergetique;
use Modules\ComtabiliteEnergetique\Http\Requests\CreateComtabiliteEnergetiqueRequeste;
use Modules\ComtabiliteEnergetique\Http\Requests\UpdateComtabiliteEnergetiqueRequesteComtabiliteEnergetiqueRequeste;
use Modules\ComtabiliteEnergetique\Repositories\ComtabiliteEnergetiqueRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\ComtabiliteEnergetique\Http\Requests\UpdateComtabiliteEnergetiqueRequeste;
use PDF;
use App;

class ComtabiliteEnergetiqueController extends AdminBaseController
{
    /**
     * @var ComtabiliteEnergetiqueRepository
     */
    private $comtabiliteenergetique;


    public function __construct(ComtabiliteEnergetiqueRepository $comtabiliteenergetique)
    {
        parent::__construct();

        $this->comtabiliteenergetique = $comtabiliteenergetique;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $comtabiliteenergetiques = $this->comtabiliteenergetique->all();
        $name = 'Cuize';
        return view('comtabiliteenergetique::admin.comtabiliteenergetiques.index', compact('comtabiliteenergetiques','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('comtabiliteenergetique::admin.comtabiliteenergetiques.create')->with('name','Cuize');
    }

    public function curl(){
        return view('comtabiliteenergetique::admin.comtabiliteenergetiques.curl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateComtabiliteEnergetiqueRequeste $request
     * @return Response
     */
    public function store(CreateComtabiliteEnergetiqueRequeste $request)
    {
        $this->comtabiliteenergetique->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('comtabiliteenergetique::comtabiliteenergetiques.title.comtabiliteenergetiques')]));

        return redirect()->route('admin.comtabiliteenergetique.comtabiliteenergetique.index');
    }
    /**
     * Download the new PDF file
     *
     * @return Response
     */
    public function download(){
        $data = array('name'=>'SUCCESS');
        $pdf = PDF::loadView('admin/comtabiliteenergetiques/partials/create-fields', $data);
        return $pdf->download('test.pdf');
    }
    /**
     * Show the pdf files in html
     * @return mixed
     */
//    public function show()
//    {
//        $html = '<html><head><title>Laravel</title><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\'/><style>body{  font-family: \'msyh\';  }  @font-face {  font-family: \'msyh\';  font-style: normal;  font-weight: normal;  src: url(http://www.testenv.com/fonts/msyh.ttf) format(\'truetype\');  }</style></head><body><div class=\'container\'><div class=\'content\'><p style=\'font-family: msyh, DejaVu Sans,sans-serif;\'>test</p><div style=\'font-family: msyh, DejaVu Sans,sans-serif;\' class=\'title\'>Laravel 5test</div><div  class=\'title\'>test3</div></div></div></body></html>';
//        $pdf = PDF::loadHTML($html);
//        return $pdf->stream();
//    }

    public function getpdftest($request){
        $data =
        $pdf = PDF::loadView('comtabiliteenergetique::admin.comtabiliteenergetiques.testpdf');
        return $pdf->stream();
    }

    public function postpdftest(Request $request){
        $data = $request->invisible;
        $html = '<html><body> <img src="'.$data.'" > </body> </html>';
        $pdf = PDF::loadHTML($html);
        return $pdf->stream();
    }

    public function show()
    {
        $pdf = PDF::loadHTML('<h1>Hello Worlad</h1>');
        return $pdf->stream();
    }

    public function test(){
        return view('comtabiliteenergetique::admin.comtabiliteenergetiques.test')->with('name','Cuize');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  ComtabiliteEnergetique $comtabiliteenergetique
     * @return Response
     */
    public function edit(ComtabiliteEnergetique $comtabiliteenergetique)
    {
        return view('comtabiliteenergetique::admin.comtabiliteenergetiques.edit', compact('comtabiliteenergetique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ComtabiliteEnergetique $comtabiliteenergetique
     * @param  Request $request
     * @return Response
     */
    public function update(ComtabiliteEnergetique $comtabiliteenergetique, UpdateComtabiliteEnergetiqueRequeste $request)
    {
        $this->comtabiliteenergetique->update($comtabiliteenergetique, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('comtabiliteenergetique::comtabiliteenergetiques.title.comtabiliteenergetiques')]));

        return redirect()->route('admin.comtabiliteenergetique.comtabiliteenergetique.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ComtabiliteEnergetique $comtabiliteenergetique
     * @return Response
     */
    public function destroy(ComtabiliteEnergetique $comtabiliteenergetique)
    {
        $this->comtabiliteenergetique->destroy($comtabiliteenergetique);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('comtabiliteenergetique::comtabiliteenergetiques.title.comtabiliteenergetiques')]));

        return redirect()->route('admin.comtabiliteenergetique.comtabiliteenergetique.index');
    }
}
