<?php

namespace App\Http\Controllers\SalesForce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Utilities
use Illuminate\Support\Carbon;
use Auth;
use Validator;
use DataTables;
// Model
use App\Models\SalesForce\SalesAutomationHeader;
use App\Models\SalesForce\SalesAutomationDetail;
// Traits
use App\Traits\SalesForce\salesForceDbOperations;
use App\Traits\TablesSchema3SIS\tablesSchema3SIS;
use App\Models\t92;

class SalesAutomationController extends Controller
{
    use salesForceDbOperations, tablesSchema3SIS;

    public function menu()
    {
       return $menu = t92::tree();
    }

    function Index()
    { 
        $data = $this->dataTableXLSchemaTrait();
        $menu = $this->menu();

        return view('SalesForce.salesautomation',compact('menu'))->with($data);
    }

    function BrowserData()
    {
        //Eloquent way - Model is must
        $BrowserDataTable = $this->BrowserDataTrait();
            return DataTables::of($BrowserDataTable)
            ->addColumn('action', function($SalesForce){
                return '<a href="#" class="btn mr-1 btnEditRec3SIS edit" id="'.$SalesForce->SAOEHUniqueId.'">Edit
                            <i class="fas fa-edit fa-xs"></i>
                        </a>
                        <a href="#" class="btn btnDeleteRec3SIS delete" id="'.$SalesForce->SAOEHUniqueId.'">Del
                            <i class="far fa-trash-alt fa-xs"></i>
                        </a>';
        })
        ->make(true);
    }

}




