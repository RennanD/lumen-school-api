<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{


  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'status'
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

  public function classes() {
    return $this->hasMany(ClassModel::class, 'series_id', 'id');
  }

}
