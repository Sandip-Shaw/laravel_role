<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class MemberManagement extends Model
{
    use HasFactory,HasRoles;

    protected $primaryKey = 'member_id';

    public function branchdet(){

        return $this->belongsTo(CompanyBranch::class,'branch');
    } 

    public function loanApplication(){

        return $this->hasMany(LoanApplication::class);
    } 

    public function associatedet(){

        return $this->belongsTo(HrManagement::class,'associate');
    }
    public function comp_director(){

        return $this->hasMany(CompanyDirector::class);
    } 
}
