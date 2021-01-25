<?php

namespace App\Services;

use App\Models\Subject;

class ListSubjectsService {

  /**
  * @return array;
  */
  public function run() {
    $subjectsRepository = new Subject();
    $subjects = $subjectsRepository->orderBy('id', 'DESC')->get();

    return $subjects;
  }
}
