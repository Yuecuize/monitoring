<?php namespace Modules\Report\Http\Controllers\Admin;

use Modules\Report\Http\Requests\CreatePdfRequests;
use File;
use Response;
use Illuminate\Http\Request;
use Modules\Report\Entities\Reports;
use Modules\Report\Repositories\ReportsRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Report\Repositories\PdfRepository\PdfRepository;

class ReportsController extends AdminBaseController
{
    /**
     * @var ReportsRepository
     */
    private $reports;

    public function __construct(ReportsRepository $reports)
    {
        parent::__construct();

        $this->reports = $reports;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $reports = $this->reports->all();

        return view('report::admin.reports.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('report::admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->reports->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('report::reports.title.reports')]));

        return redirect()->route('admin.report.reports.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Reports $reports
     * @return Response
     */
    public function edit(Reports $reports)
    {
        return view('report::admin.reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Reports $reports
     * @param  Request $request
     * @return Response
     */
    public function update(Reports $reports, Request $request)
    {
        $this->reports->update($reports, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('report::reports.title.reports')]));

        return redirect()->route('admin.report.reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Reports $reports
     * @return Response
     */
    public function destroy(Reports $reports)
    {
        $this->reports->destroy($reports);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('report::reports.title.reports')]));

        return redirect()->route('admin.report.reports.index');
    }

    public function pdfByDay(Reports $reports,CreatePdfRequests $request)
    {
        $res = new PdfRepository($reports);
        $date_array = array($request->input('date1'),$request->input('date2'));
        $filename = $res->generateGraphic($date_array,1);
        $path = storage_path('pdf/' . $filename);

        $file = File::get($path);
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }

    public function day(Reports $reports)
    {
        return view('report::admin.reports.partials.day', compact('reports'));
    }

    public function month(Reports $reports)
    {
        return view('report::admin.reports.partials.month', compact('reports'));
    }

    public function pdfByMonth(Reports $reports,CreatePdfRequests $request)
    {
        $res = new PdfRepository($reports);
        $date_array = array($request->input('date1'),$request->input('date2'));$filename = $res->generateGraphic($date_array,2);
        $path = storage_path('pdf/' . $filename);

        $file = File::get($path);
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }


    public function year(Reports $reports)
    {
        return view('report::admin.reports.partials.year', compact('reports'));
    }

    public function pdfByYear(Reports $reports,CreatePdfRequests $request)
    {
        $res = new PdfRepository($reports);
        $date_array = array($request->input('date1'),$request->input('date2'));
        $filename = $res->generateGraphic($date_array,3);
        $path = storage_path('pdf/' . $filename);

        $file = File::get($path);
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }


    public function year_range(Reports $reports)
    {
        return view('report::admin.reports.partials.year_range', compact('reports'));
    }

    public function pdfByYearRange(Reports $reports,CreatePdfRequests $request)
    {
        $res = new PdfRepository($reports);
        $date_array = array($request->input('date1'),$request->input('date2'));
        $filename = $res->generateGraphic($date_array,4);
        $path = storage_path('pdf/' . $filename);

        $file = File::get($path);
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }
}
