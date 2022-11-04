<?php
namespace app\Traits\SalesForce;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Carbon;
use App\Models\SalesForce\SalesAutomationHeader;
use App\Models\SalesForce\SalesAutomationDetail;
// SalesForce Master
//  : Gneral Master SalesForce of Payrall
trait salesForceDbOperations {        
     
     public function BrowserDataTrait() 
     { 
         return $browserData = SalesAutomationDetail::where('SAODDMarkForDeletion', 0)
         ->get([
            'SAODDUniqueId', 
            'SAODDUniqueIdH',
            'SAODDLineItemNo',
            'SAODDMaterialId',
            'SAODDMaterialDesc',
            'SAODDOrderQuantity',
            'SAODDListPrice',
            'SAODDUserUpdatedPrice',
            'SAODDLineItemValue',
            'SAODDEntryDate',
            'SAODDRequestedDate',
            'SAODDNegotiatedDelDate',
            'SAODDStatus',
            'SAODDUser',
            'SAODDLastUpdated'


         ]);
     }
     public function AddUpdateTrait($request)
     {
        if($request->get('button_action') == 'insert') {
            $SalesForce = new BloodGroup;                
            $SalesForce->GMBGHBloodGroupId    =   $request->GMBGHBloodGroupId;            
            $SalesForce->GMBGHLastCreated  =   Carbon::now();
        }elseif($request->get('button_action') == 'update'){
            $SalesForce = BloodGroup::find($request->get('GMBGHUniqueId'));
        }
        $SalesForce->GMBGHDesc1                =   $request->GMBGHDesc1;
        $SalesForce->GMBGHDesc2                =   $request->GMBGHDesc2;
        $SalesForce->GMBGHBiDesc               =   $request->GMBGHBiDesc;
        $SalesForce->GMBGHMarkForDeletion      =   0;
        // $SalesForce->GMBGHUser                 =   Auth::user()->name;
        $SalesForce->GMBGHLastUpdated          =   Carbon::now();
        $SalesForce->save(); 
        if($request->get('button_action') == 'insert') {
            $UniqueId = $SalesForce->GMBGHUniqueId; 
        }elseif($request->get('button_action') == 'update'){
            $UniqueId = $request->get('GMBGHUniqueId');
        }
        return $UniqueId; 
     }
     
     
}