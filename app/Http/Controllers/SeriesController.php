<?php

namespace App\Http\Controllers;

use App\Services\CreateSeriesService;
use App\Services\ListSeriesService;
use App\Services\ShowSeriesService;
use Illuminate\Http\Request;

class SeriesController extends Controller {



  public function index() {
    $listSeries = new ListSeriesService();
    $series = $listSeries->run();

    return response()->json($series);
  }

  public function show(int $series_id) {
    try {
      $showSeries = new ShowSeriesService();

      $series = $showSeries->run($series_id);

      return response()->json($series);
    } catch (\Throwable $error) {
      return response()->json([
        "error" => $error->getMessage()
      ], 400);
    }
  }

  public function create(Request $request) {
    $createSeries = new CreateSeriesService();

    try {
      $series = $createSeries->run($request->all());

      return response()->json($series, 201);
    } catch (\Throwable $error) {
      return response()->json([
        "error" => $error->getMessage()
      ], 400);
    }
  }


}
