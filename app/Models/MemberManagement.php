<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class MemberManagement extends Model
{
    use HasFactory,HasRoles;

    protected $primaryKey = 'member_id';
}
