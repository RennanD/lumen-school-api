<?php

namespace App\Services;

use App\Models\ClassModel;
use Exception;

class CreateClassesService {

  /**
  * @return array;
  */
  public function run(array $data) {
    $classesRepository = new ClassModel();

    $existentClass = $classesRepository->where('code', $data['code'])->first();


    if($existentClass) {
      throw new Exception('This class already exists', 400);
    }

    $class = $classesRepository->create($data);
    return $class;

  }
}
