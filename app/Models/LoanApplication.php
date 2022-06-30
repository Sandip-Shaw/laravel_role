<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class LoanApplication extends Model
{
    use HasFactory,HasRoles;
    
    protected $primaryKey = 'loanApplication_id';

    public function branchdetails(){

        return $this->belongsTo(CompanyBranch::class,'branch');
    } 
    public function memberdetails(){

        return $this->belongsTo(MemberManagement::class,'member');
    } 
    public function loanSchema(){

        return $this->belongsTo(LoanSchema::class,'loan_schema');
    } 

}
