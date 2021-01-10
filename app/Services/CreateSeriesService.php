<?php

namespace App\Services;

use App\Models\Series;
use Exception;

class CreateSeriesService {

  /**
  * @return array;
  */
  public function run(array $data) {
    $seriesRepository = new Series();

    $existentSeries = $seriesRepository->where('name', $data['name'])->first();


    if($existentSeries) {
      throw new Exception('This series already exists', 400);
    }

    $series = $seriesRepository->create($data);
    return $series;


  }
}
