<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageAd extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable=['package_id','ads_amount','status'];
    function relationToPackage(){
        return $this->hasOne('App\Models\Package','id','package_id');
      }
}
