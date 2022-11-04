<?php

namespace App\Models\SalesForce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesAutomationDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'T25101L0111';
    protected $primaryKey = 'SAODDUniqueId';
    protected $fillable = 
        [
            'SAODDUniqueId',
            'SAODDUniqueIdH',
            'SAODDCompId',
            'SAODDPlantId',
            'SAODDShipTo',
            'SAODDDocumentType',
            'SAODDDocumentNo',
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
            'SAODDUser',
            'SAODDStatus',
            'SAODDLastCreated',
            'SAODDLastUpdated',
            'SAODDDeletedDate',
            'SAODDMarkForDeletion'

        ];
        protected $casts = [
            'SAODDLastCreated' => 'datetime:d/m/Y',
            'SAODDLastUpdated' => 'datetime:d/m/Y',
            'SAODDDeletedAt' => 'datetime:d/m/Y'
        ];
}
