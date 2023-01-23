<?php

namespace App\Http\Controllers;

use App\Exports\phonesExport;
use App\Imports\PhonesImport;
use App\Models\Phones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use App\Helpers\Helper;


class PhonesController extends Controller
{
    protected $pageLimit;
    protected $model;
    protected $blade;
    protected $route;
    protected $title;
    protected $titleIndex;
    protected $UploadFile;
    protected $DownloadFileSimple;
    


    public function __construct()
    {
        $this->model  = '\App\Models\User';
        $this->blade  = 'pages.phones.';
        $this->route  = 'phones.';
        $this->title  = __('lang.Phones');
        $this->titleIndex  = __('lang.Phones');
        $this->UploadFile  = __('lang.UploadFile');
        $this->DownloadFileSimple  = __('lang.DownloadFileSimple');

    }
    
    public function index(Request $request)
    {
        $phoneStatus = Helper::PhonesStatus();
        
        $status = "";

        ( empty($request) || $request->status =='all' ) ? $status ="" :$status = $request->status;
         $status !="" ? $status = $phoneStatus[$status]:$status;
  
        $phones = Phones::when($status, function ($query, $status) {
            $query->where('status',$status);
        })->orderBy('created_at', 'DESC')->paginate(20); 
        return view('pages.phones.index', compact('phones'));

    }

    public function upload()
    {

        $roles = $users = $plans =[];

            $PageType = ['link'=>"/home",'name'=>trans('lang.home'),'type'=>'user','AddTitle'=>$this->UploadFile];
            $breadcrumbs = [
                ['link'=>"/home",'name'=>trans('lang.home')],
                ['name'=>$this->UploadFile]
           ];
      
       $pageConfigs = ['pageHeader' => true,'title'      => $this->UploadFile];


        return view($this->blade.__FUNCTION__,compact("pageConfigs","breadcrumbs","PageType"));
    }

    public function uploadStore(request $request)
    {
        // $file=$request->file('xlsx');
        // $destinationPath = 'uploads';
        // $filename =$file->getClientOriginalName();
        // $file->move($destinationPath,$filename);
        // $path = $destinationPath.'/'. $filename;
      
        Excel::queueImport(new PhonesImport,$request->file('xlsx'));

        return redirect()->back();

    }

    public function DownloadSimple()
    {

        $path = public_path('/simple.xlsx');
        $fileName = 'simple.xlsx';
        return Response::download($path, $fileName);
        return redirect()->back(); 

    }
    public function export(Request $request)
    {
        return Excel::download(new phonesExport($request->all()), 'usersExport.xlsx');
    }
}
