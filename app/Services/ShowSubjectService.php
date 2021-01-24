<?php

namespace App\Services;

use App\Models\Subject;
use Exception;

class ShowSubjectService {

  /**
  * @return array;
  */
  public function run(int $subject_id) {
    $subjectRepository = new Subject();

    $checkSubject = $subjectRepository->find($subject_id);


    if(!$checkSubject) {
      throw new Exception('The subject not found', 400);
    }

    foreach($checkSubject->classes()->get() AS $key=>$value){
        $checkSubject->classes->$key = $value;
    }

    return $checkSubject;


  }
}

