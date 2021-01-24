<?php

namespace App\Services;

use App\Models\ClassModel;

class ListClassesService {

  /**
  * @return array;
  */
  public function run() {
    $classesRepository = new ClassModel();
    $classes = $classesRepository->orderBy('id', 'DESC')->get();

    $serialiazedClasses = [];

    foreach($classes as $classItem) {
      foreach($classItem->series()->first() as $key => $value) {
        $classItem->series->$key = $value;
      }

      array_push($serialiazedClasses, $classItem);
    }

    return $serialiazedClasses;
  }
}
