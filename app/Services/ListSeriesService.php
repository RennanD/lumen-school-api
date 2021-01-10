<?php

namespace App\Services;

use App\Models\Series;

class ListSeriesService {



  /**
  * @return array;
  */
  public function run() {
    $seriesRepository = new Series();
    $series = $seriesRepository->all();

    return $series;
  }
}
