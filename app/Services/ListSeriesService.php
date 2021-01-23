<?php

namespace App\Services;

use App\Models\Series;

class ListSeriesService {



  /**
  * @return array;
  */
  public function run() {
    $seriesRepository = new Series();
    $series = $seriesRepository->orderBy('id', 'DESC')->get();

    return $series;
  }
}
