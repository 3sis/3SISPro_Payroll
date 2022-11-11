<?php

namespace App\Models\CommonMasters\GeographicInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CommonMasters\GeographicInfo\Country;

class State extends Model
{
    use HasFactory;    
    public $timestamps = false;
    protected $table = 't05901l04';
    protected $primaryKey = 'GMSMHUniqueId';
    protected $fillable = 
        [
            'GMSMHUniqueId',
            'GMSMHStateId', 
            'GMSMHCountryId',
            'GMSMHDesc1', 
            'GMSMHDesc2', 
            'GMSMHBiDesc', 
            'GMSMHMarkForDeletion',
            'GMSMHUser',
            'GMSMHLastCreated',
            'GMSMHLastUpdated'
        ];
        protected $casts = [
            'GMSMHLastCreated' => 'datetime:d/m/Y',
            'GMSMHLastUpdated' => 'datetime:d/m/Y',
            'GMSMHDeletedAt' => 'datetime:d/m/Y'
        ];
        // public function getCountryName()
        // {
        //     return $this->hasOne(Country::class, 'GMCMHCountryId', 'GMSMHCountryId');
        // }
        public function countrylist(){
            return $this->belongsTo(Country::class,'GMSMHCountryId','GMCMHCountryId');
        }


}
