<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class HrManagement extends Model
{
    use HasFactory,HasRoles;

    protected $primaryKey = 'hrmanagement_id';

    public function branchdetails(){

        return $this->belongsTo(CompanyBranch::class,'branch');
    }

    public function loanapplications(){

        return $this->hasMany(LoanApplication::class);
    }

    public function members(){

        return $this->hasMany(MemberManagement::class);
    }
}
