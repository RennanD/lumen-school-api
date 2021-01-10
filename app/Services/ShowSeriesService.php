<?php

namespace App\Services;

use App\Models\Series;
use Exception;

class ShowSeriesService {

  /**
  * @return array;
  */
  public function run(int $series_id) {
    $seriesRepository = new Series();

    $checkSeries = $seriesRepository->find($series_id);


    if(!$checkSeries) {
      throw new Exception('The series not found', 400);
    }

    return [
      "series"=> $checkSeries,
      "classes" => $checkSeries->classes()->get()
    ];


  }
}

