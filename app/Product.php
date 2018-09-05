<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
  use SoftDeletes;


    protected  $primaryKey = 'pro_id';

    protected $fillable = [
      'product_name', 'cate_name', 'manu_name', 'product_price', 'product_quantity', 'product_short_des', 'product_long_des', 'product_img', 'pub_status',
     ];
}
