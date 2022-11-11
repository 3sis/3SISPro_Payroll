<?php
namespace app\Traits\GetDescriptions3SIS;
use Illuminate\Support\Facades\DB;
use App\Models\CommonMasters\GeographicInfo\City;
use App\Models\CommonMasters\GeographicInfo\State;
use App\Models\CommonMasters\GeographicInfo\Country;
use App\Models\CommonMasters\GeographicInfo\Location;
use App\Models\Payroll\EmployeeMaster\GeneralInfo;
use App\Models\CommonMasters\FiscalYear\FiscalYear;
use App\Models\CommonMasters\BankingMaster\BankName;
use App\Models\CommonMasters\BankingMaster\BranchName;
use App\Models\CommonMasters\GeneralMaster\Currency;

trait getDescriptions3SIS {
    public function getStateCountryDescTrait($request)
    {
        $Id = $request->get('id');
        // echo 'Data Submitted.';
        // print_r($Id);
        // die();
        return $StateCountryDesc = City::leftJoin('t05901L04', 't05901L04.GMSMHStateId', '=', 't05901L05.GMCTHStateId')
        ->leftJoin('t05901L03', 't05901L03.GMCMHCountryId', '=', 't05901L05.GMCTHCountryId')
        ->where('t05901L05.GMCTHCityId', $Id)
        ->get([
            't05901L04.GMSMHStateId',
            't05901L04.GMSMHDesc1',
            't05901L03.GMCMHCountryId',
            't05901L03.GMCMHDesc1'
        ]);
    }
    public function getLocationDescTrait($request)
    {
        $Id = $request->get('id');
        return $LocationDesc = GeneralInfo::leftjoin('t05901l06', 't05901l06.GMLMHLocationId', '=', 'T11101l01.EMGIHLocationId')
         ->where('EMGIHEmployeeId', $Id)
        ->get([
            't05901l06.GMLMHDesc1',
            't05901l06.GMLMHLocationId'
            ])
        ->first();
    }
    public function getFiscalYearDateTrait($request)
    {
        $Id = $request->get('id');
        return $FiscalYear = FiscalYear::where('FYFYHFiscalYearId', $Id)
        ->get([
            'FYFYHStartDate',
            'FYFYHEndDate'
        ]);
        // ->first();
    }
    // City Details
    public function getContryStateDesc($id)
    {
        if (!empty($id)) {


            // dd($list = City::with('statelist')where('GMCTHCityId', $id)->first());
            $res = [];
            // $city_data = City::where('GMCTHCityId', $id)->first();
             $city_data = City::with(['statelist.countrylist'])->where('GMCTHCityId', $id)->first()->toArray();
              dd($city_data);
            // $state_data = State::where('GMSMHStateId', $city_data->GMCTHStateId)->first();
            $country_data = Country::where('GMCMHCountryId', $city_data->GMCTHCountryId)->first();
            $res['stateId'] = $city_data['GMCTHStateId'];
            $res['stateDesc1'] = $state_data['GMSMHDesc1'];
            $res['countryId'] = $city_data['GMCTHCountryId'];
            $res['countryDesc1'] = $country_data['GMCMHDesc1'];
            return $res;
        }
    }

    // Branch Details
    public function getBankBranch1($id)
    {
        if (!empty($id)) {
            // dd($id);
            $res = [];
            $branch_data = BranchName::where('BMBRHBranchId', $id)->first();
            $bank_data = BankName::where('BMBNHBankId', $branch_data->BMBRHBankId)->first();
            $res['BankId'] = $branch_data['BMBRHBankId'];
            $res['bankDesc1'] = $bank_data['BMBNHDesc1'];
            $res['IFSCId'] = $branch_data['BMBRHIFSCId'];
            return $res;
        }
    }
}
