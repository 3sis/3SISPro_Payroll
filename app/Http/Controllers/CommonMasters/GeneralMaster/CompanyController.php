<?php

namespace App\Http\Controllers\CommonMasters\GeneralMaster;

use App\Http\Controllers\Controller;
use App\Models\CommonMasters\BankingMaster\BankName;
use App\Models\CommonMasters\BankingMaster\BranchName;
use App\Models\CommonMasters\GeneralMaster\Currency;
// Add Model here
use App\Models\CommonMasters\GeographicInfo\City;
use App\Models\CommonMasters\GeographicInfo\Country;
use App\Models\CommonMasters\GeographicInfo\State;
use App\Models\t92;
use App\Traits\CommonMasters\GeneralMaster\companyDbOperations;
use App\Traits\GetDescriptions3SIS\getDescriptions3SIS;
use App\Traits\TablesSchema3SIS\tablesSchema3SIS;
use DataTables;
use Illuminate\Http\Request;
use Validator;

class CompanyController extends Controller
{
    use companyDbOperations, tablesSchema3SIS, getDescriptions3SIS;

    public function menu()
    {
        return $menu = t92::tree();
    }

    public function Index()
    {
        // echo 'Data Submitted.11';
        $data = $this->dataTableXLSchemaTrait();
        $menu = $this->menu();

        $table_default_theme = config('app.table_default_theme');
        $modal_form_theme = config('app.modal_form_theme');
        $card_form_theme = config('app.card_form_theme');

        // dd($userTheme);
        $currency_list = Currency::all();
        $city_list = City::all();
        $branch_list = BranchName::all();
        $UserId = \Auth::user()->name;

        return view('CommonMasters.GeneralMaster.company',
            compact('menu', 'currency_list', 'city_list', 'branch_list',
                'UserId', 'table_default_theme', 'modal_form_theme', 'card_form_theme'))->with($data);
    }
    public function BrowserData()
    {
        $BrowserDataTable = $this->gmcmBrowserDataTrait();

        return DataTables::of($BrowserDataTable)
            ->addColumn('action', function ($company) {
                // return '<a href="#" class="btn mr-1 btnEditRec3SIS edit" id="' . $company->GMCOHUniqueId . '">Edit
                //         <i class="fas fa-edit fa-xs"></i>
                //     </a>
                //     <a href="#" class="btn btnDeleteRec3SIS delete" id="' . $company->GMCOHUniqueId . '">Delete
                //         <i class="far fa-trash-alt fa-xs"></i>
                //     </a>';

                return
                '<a href="javascript:void(0);" class="btn mr-1 btnEditRec3SIS bs-tooltip edit" id="' . $company->GMCOHUniqueId . '">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-edit-2 p-1 br-6 mb-1" style="color: black;">
                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                <a href="javascript:void(0);" class="btn mr-1 btnDeleteRec3SIS bs-tooltip delete" id="' . $company->GMCOHUniqueId . '">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-trash p-1 br-6 mb-1" style="color: red;">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function PostData(Request $request)
    {
        // echo 'Data Submitted.';
        // return $request->input();
        if ($request->get('button_action') == 'insert') {
            $validator = Validator::make($request->all(), [
                'GMCOHCompanyId' => 'required|min:2|max:10||unique:t05901l01,GMCOHCompanyId',
                'currenyId' => 'required',
                'GMCOHDesc1' => 'required|max:100',
                'GMCOHDesc2' => 'max:200',
                'GMCOHBiDesc' => 'max:100',
                'GMCOHNickName' => 'max:50',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'GMCOHCompanyId' => 'required',
                'currenyId' => 'required',
                'GMCOHDesc1' => 'required|max:100',
                'GMCOHDesc2' => 'max:200',
                'GMCOHBiDesc' => 'max:100',
                'GMCOHNickName' => 'max:50',
            ]);
        }

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            // When add button is pushed
            if ($request->get('button_action') == 'insert') {
                $this->gmcmAddUpdateTrait($request);
                return response()->json(['status' => 1, 'Id' => $request->get('GMCOHCompanyId'), 'Desc1' => $request->get('GMCOHDesc1'),
                    'masterName' => 'Company ', 'updateMode' => 'Added']);
            }
            // When edit button is pushed
            if ($request->get('button_action') == 'update') {
                $this->gmcmAddUpdateTrait($request);
                return response()->json(['status' => 1, 'Id' => $request->get('GMCOHCompanyId'), 'Desc1' => $request->get('GMCOHDesc1'),
                    'masterName' => 'Company ', 'updateMode' => 'Updated']);
            }
        }
    }
    public function Fetchdata(Request $request)
    {
        $fethchedData = $this->gmcmFethchEditedDataTrait($request);
        echo json_encode($fethchedData);
    }
    public function DeleteData(Request $request)
    {
        $Id = $this->gmcmDeleteRecordTrait($request);
        return response()->json(['status' => 1, 'Id' => $Id,
            'Desc1' => '', 'masterName' => 'Country ', 'updateMode' => 'Deleted']);
    }
    public function BrowserDeletedRecords()
    {
        //Eloquent way - Model is must
        $browserDeletedRecords = $this->gmcmBrowserDeletedRecordsTrait();
        return DataTables::of($browserDeletedRecords)
            ->addColumn('action', function ($DeletedCountry) {
                return '<a href="#" class="btn mr-1 btnEditRec3SIS restore" id="' . $DeletedCountry->GMCOHUniqueId . '">Restore
                        <i class="fas fa-trash-restore"></i>
                    </a>';
            })
            ->make(true);
    }
    public function RestoreDeletedRecord(Request $request)
    {
        $Id = $this->gmcmUnDeleteRecordTrait($request);
        return response()->json(['status' => 1, 'Id' => $Id,
            'Desc1' => '', 'masterName' => 'Company ', 'updateMode' => 'Restored']);
    }
    // City Details
    public function getcityStateDropDown(Request $request)
    {
        $CityDetails = $this->getContryStateDesc($request->id);
        return response()->json($CityDetails);
    }

    // Branch Details
    public function getBankBranch(Request $request)
    {
        $branchDetails = $this->getBankBranch1($request->id);
        return response()->json($branchDetails);
    }


    //tab design test
    public function Tab()
    {
        // echo 'Data Submitted.11';
        $data = $this->dataTableXLSchemaTrait();
        $menu = $this->menu();

        $currency_list = Currency::all();
        $city_list = City::all();
        $branch_list = BranchName::all();

        return view('CommonMasters.GeneralMaster.tab', compact('menu', 'currency_list', 'city_list', 'branch_list'))->with($data);
    }
}
