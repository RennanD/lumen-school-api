<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{

  protected $table = 'classes';

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

  public function series() {
    return $this->belongsTo(Series::class, 'series_id', 'id');
  }

}
