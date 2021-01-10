<?php

namespace App\Services;

use App\Models\ClassModel;
use Exception;

class ShowClassService {

  /**
  * @return array;
  */
  public function run(int $class_id) {
    $classesRepository = new ClassModel();

    $checkclass = $classesRepository->find($class_id);


    if(!$checkclass) {
      throw new Exception('The class not found', 400);
    }

    return [
      "class"=> $checkclass,
      "series" => $checkclass->series()->first()
    ];


  }
}

