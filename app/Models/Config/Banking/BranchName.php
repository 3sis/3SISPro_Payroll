<?php

namespace App\Models\Config\Banking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Config\Banking\BankName;

class BranchName extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 't05902l02';
    protected $primaryKey = 'BMBRHUniqueId';
    protected $fillable =
        [
            'BMBRHUniqueId',
            'BMBRHBranchId',
            'BMBRHBankId',
            'BMBRHIFSCId',
            'BMBRHDesc1',
            'BMBRHDesc2',
            'BMBRHBiDesc',
            'BMBRHMarkForDeletion',
            'BMBRHUser',
            'BMBRHLastCreated',
            'BMBRHLastUpdated',
            'BMBRHDeletedAt'
        ];
        protected $casts = [
            'BMBRHLastCreated' => 'datetime:d/m/Y',
            'BMBRHLastUpdated' => 'datetime:d/m/Y',
            'BMBRHDeletedAt' => 'datetime:d/m/Y'
        ];
        public function fnBankDetail()
        {
            return $this->hasOne(BankName::class, 'BMBNHBankId', 'BMBRHBankId');
        }
}
