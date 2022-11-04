<?php

namespace App\Models\SalesForce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesAutomationHeader extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'T25101L01';
    protected $primaryKey = 'SAOEHUniqueId';
    protected $fillable = 
        [
            'SAOEHUniqueId',
            'SAOEHCompId',
            'SAOEHPlantId',
            'SAOEHShipTo',
            'SAOEHDocumentType',
            'SAOEHDocumentNo',
            'SAOEHEntryDate',
            'SAOEHRequestedDate',
            'SAOEHNegotiatedDelDate',
            'SAOEHOrderValue',
            'SAOEHUser',
            'SAOEHStatus',
            'SAOEHLastCreated',
            'SAOEHLastUpdated',
            'SAOEHDeletedDate',
            'SAOEHMarkForDeletion',
        ];
        protected $casts = [
            'SAOEHLastCreated' => 'datetime:d/m/Y',
            'SAOEHLastUpdated' => 'datetime:d/m/Y',
            'SAOEHDeletedAt' => 'datetime:d/m/Y'
        ];
}