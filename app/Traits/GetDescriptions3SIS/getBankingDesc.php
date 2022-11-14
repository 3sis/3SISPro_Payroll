<?php
namespace app\Traits\GetDescriptions3SIS;
use Illuminate\Support\Facades\DB;

use App\Models\Config\Banking\BranchName;
use App\Models\Config\Banking\BankName;

trait getBankingDesc {
    // Branch - IFSC Code and
    // Bank - Desc
    public function getBranchDetails($id)
    {
        if (!empty($id)) {
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
