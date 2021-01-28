<?php

namespace App\Services;

use App\Models\Subject;
use Exception;

class CreateSubjectsService {

  /**
  * @return array;
  */
  public function run(array $data) {
    $subjectsRepository = new Subject();


    $existentSubject = $subjectsRepository
      ->where('name', $data['name'])
      ->first();

    if($existentSubject) {
      throw new Exception('This subject already exists', 400);
    }

    $subject = $subjectsRepository->create([
      "name" => $data['name']
    ]);


    return $subject;


  }
}
