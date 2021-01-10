<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{


  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'series_id', 'name', 'shift', 'code'
  ];

  /**
  *
  * @var array
  */

  protected $casts = [
    'status' => 'string'
  ];

  /**
  * The model's default values for attributes.
  *
  * @var array
  */
  protected $attributes = [
    'status' => 'active'
  ];

}
