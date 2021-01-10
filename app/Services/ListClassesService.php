<?php

namespace App\Services;

use App\Models\ClassModel;

class ListClassesService {



  /**
  * @return array;
  */
  public function run() {
    $classesRepository = new ClassModel();
    $classes = $classesRepository->all();

    return $classes;
  }
}