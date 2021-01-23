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

    $serialiazedClasses = [];

    foreach($classes as $classItem) {
      array_push($serialiazedClasses, [
        "classes" => $classItem,
        "series" =>$classItem->series()->first()
      ]);
    }

    return $serialiazedClasses;
  }
}
