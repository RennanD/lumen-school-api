<?php

namespace App\Services;

use App\Models\Subject;
use App\Models\SubjectClasses;
use Exception;

class CreateSubjectsService {

  /**
  * @return array;
  */
  public function run(array $data) {
    $subjectsRepository = new Subject();
    $subjectClassesRepository = new SubjectClasses();

    $existentSubject = $subjectsRepository
      ->where('name', $data['name'])
      ->first();

    if($existentSubject) {
      throw new Exception('This subject already exists', 400);
    }

    $subject = $subjectsRepository->create([
      "name" => $data['name']
    ]);

    foreach($data['classes'] as $class) {
      $subjectClassesRepository->create([
        "subject_id" => $subject->id,
        "class_id" => $class
      ]);
    }

    return $subject;


  }
}
