<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
 protected $fillable=['title','sub_title','description','ads_image','video','per_click','link','validity'];

}
