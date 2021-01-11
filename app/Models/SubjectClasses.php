<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectClasses extends Model
{


  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'subject_id', 'class_id'
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
