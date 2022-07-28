<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionCenter extends Model
{
    use HasFactory;

    public function collectiondetails() {
        return $this->belongsTo(CompanyBranch::class,'branch');
    }
}
