<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    Protected $fillable=['package_name','revenue_percent','invest','daily_income','validity'];

}
