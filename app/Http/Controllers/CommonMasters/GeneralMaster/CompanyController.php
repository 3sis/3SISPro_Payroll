<?php

namespace App\Http\Controllers\CommonMasters\GeneralMaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;
use Validator;
// Add Model here
use App\Models\CommonMasters\GeneralMaster\Company;
use DataTables;
use App\Traits\TablesSchema3SIS\tablesSchema3SIS;
use App\Traits\CommonMasters\GeneralMaster\companyDbOperations;
use App\Traits\GetDescriptions3SIS\getDescriptions3SIS;
use App\Models\t92;
use App\Models\CommonMasters\GeneralMaster\Currency;
use App\Models\CommonMasters\GeographicInfo\City;
use App\Models\CommonMasters\BankingMaster\BankName;
use App\Models\CommonMasters\BankingMaster\BranchName;


class CompanyController extends Controller
{
    use companyDbOperations, tablesSchema3SIS,getDescriptions3SIS;

    public function menu()
    {
       return $menu = t92::tree();
    }

    function Index()
    { 
        // echo 'Data Submitted.11';
        $data = $this->dataTableXLSchemaTrait();
        $menu = $this->menu();

        $currency_list = Currency::all();
        $city_list = City::all();
        $bank1_list = BankName::all();
        $bank2_list = BranchName::all();

        return view('CommonMasters.GeneralMaster.company',compact('menu','currency_list','city_list','bank1_list','bank2_list'))->with($data);
    }
    function BrowserData()
    {
        $BrowserDataTable = $this->gmcmBrowserDataTrait(); 
        // dd($BrowserDataTable);
        return DataTables::of($BrowserDataTable)
        ->addColumn('action', function($company){
            return '<a href="#" class="btn mr-1 btnEditRec3SIS edit" id="'.$company->GMCOHUniqueId.'">Edit
                        <i class="fas fa-edit fa-xs"></i>
                    </a>
                    <a href="#" class="btn btnDeleteRec3SIS delete" id="'.$company->GMCOHUniqueId.'">Delete
                        <i class="far fa-trash-alt fa-xs"></i>
                    </a>';
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    function PostData(Request $request)
    {
        // echo 'Data Submitted.';
        // return $request->input();
        if($request->get('button_action') == 'insert')
        {
            $validator = Validator::make($request->all(), [
                'GMCOHCompanyId'    => 'required|min:2|max:10||unique:t05901l01,GMCOHCompanyId',
                'currenyId'         => 'required',
                'GMCOHDesc1'        => 'required|max:100',
                'GMCOHDesc2'        => 'max:200',
                'GMCOHBiDesc'       => 'max:100',
                'GMCOHNickName'     => 'max:50',
            ]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'GMCOHCompanyId'    => 'required',
                'currenyId'         => 'required',
                'GMCOHDesc1'        => 'required|max:100',
                'GMCOHDesc2'        => 'max:200',
                'GMCOHBiDesc'       => 'max:100',
                'GMCOHNickName'     => 'max:50',
            ]);
        }
        

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }
        else{            
            // When add button is pushed
            if($request->get('button_action') == 'insert')
            {
                $this->gmcmAddUpdateTrait($request);
                return response()->json(['status'=>1, 'Id'=>$request->get('GMCOHCompanyId'), 'Desc1'=>$request->get('GMCOHDesc1'),
                'masterName'=>'Company ', 'updateMode'=>'Added']); 
            }
            // When edit button is pushed
            if($request->get('button_action') == 'update')
            {
                $this->gmcmAddUpdateTrait($request);
                return response()->json(['status'=>1, 'Id'=>$request->get('GMCOHCompanyId'), 'Desc1'=>$request->get('GMCOHDesc1'),
                    'masterName'=>'Company ', 'updateMode'=>'Updated']);           
            }
                   
        }
    }
    function Fetchdata(Request $request)
    {
        $fethchedData = $this->gmcmFethchEditedDataTrait($request);
        echo json_encode($fethchedData);
    }
    function DeleteData(Request $request)
    {
        $Id = $this->gmcmDeleteRecordTrait($request);
        return response()->json(['status'=>1, 'Id'=>$Id, 
        'Desc1'=>'','masterName'=>'Country ', 'updateMode'=>'Deleted']); 
    }
    function BrowserDeletedRecords()
    {
        //Eloquent way - Model is must 
        $browserDeletedRecords = $this->gmcmBrowserDeletedRecordsTrait(); 
        return DataTables::of($browserDeletedRecords)
        ->addColumn('action', function($DeletedCountry){
            return '<a href="#" class="btn mr-1 btnEditRec3SIS restore" id="'.$DeletedCountry->GMCOHUniqueId.'">Restore
                        <i class="fas fa-trash-restore"></i>
                    </a>';
        })
        ->make(true);
    }
    function RestoreDeletedRecord(Request $request)
    {                    
        $Id = $this->gmcmUnDeleteRecordTrait($request);
        return response()->json(['status'=>1, 'Id'=>$Id, 
        'Desc1'=>'', 'masterName'=>'Company ', 'updateMode'=>'Restored']); 
    } 

    public function getcityStateDropDown(Request $request)
   {
        if(!empty($request->id)){
          $res = [];
          $city_date =  City::where('GMCTHUniqueId',$request->id)->first();
          $res['stateId'] = $city_date['GMCTHStateId'];
          $res['stateDesc1'] = $city_date['GMCTHDesc1'];
          $res['countryId'] = $city_date['GMCTHCountryId'];
          $res['countryDesc1'] =$city_date['GMCTHDesc2'];
           return response()->json($res);
        }
    }

    //tab design test
    function Tab()
    { 
        // echo 'Data Submitted.11';
        $data = $this->dataTableXLSchemaTrait();
        $menu = $this->menu();

        $currency_list = Currency::all();
        $city_list = City::all();
        $bank1_list = BankName::all();
        $bank2_list = BranchName::all();

        return view('CommonMasters.GeneralMaster.tab',compact('menu','currency_list','city_list','bank1_list','bank2_list'))->with($data);
    }
}