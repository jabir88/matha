<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
        use SoftDeletes;
        protected  $primaryKey = 'role_id';

        protected $fillable = [
          'role_name',
         ];
}
