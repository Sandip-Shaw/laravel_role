<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class CompanyBranch extends Model
{
    use HasFactory,HasRoles;

    public function members(){

        return $this->hasMany(MemberManagement::class);
    } 
    public function loanApplication(){

        return $this->hasMany(LoanApplication::class);
    } 

}
