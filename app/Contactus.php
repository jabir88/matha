<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contactus extends Model
{
      use SoftDeletes;


      protected  $primaryKey = 'conus_id';

      protected $fillable = [
          'conus_status',
      ];
      protected $dates = ['deleted_at'];
}
