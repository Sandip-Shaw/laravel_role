<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class CompanyBranch extends Model
{
    use HasFactory,HasRoles;

    public function branchs(){

        return $this->hasMany(MemberManagement::class);
    } 
}
