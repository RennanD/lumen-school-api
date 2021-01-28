<?php

namespace App\Services;

use App\Models\ClassModel;
use App\Models\Series;
use App\Models\SubjectClasses;
use Exception;

class CreateClassesService {

  /**
  * @return array;
  */
  public function run(array $data) {
    $classesRepository = new ClassModel();
    $seriesRespository = new Series();
    $subjectClassesRepository = new SubjectClasses();

    $existentClass = $classesRepository->where('code', $data['code'])->first();


    if($existentClass) {
      throw new Exception('This class already exists', 400);
    }

    $checkSeries = $seriesRespository->find($data['series_id']);

    if (!$checkSeries) {
      throw new Exception("This series does'nt exists", 400);
    }

    $class = $classesRepository->create($data);

    foreach($data['subjects'] as $subject) {
      $subjectClassesRepository->create([
        "subject_id" => $subject,
        "class_id" => $class->id
      ]);
    }
    return $class;

  }
}
