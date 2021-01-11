<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CreateClassesService;
use App\Services\ListClassesService;
use App\Services\ShowClassService;

class ClassesController extends Controller {

  public function index() {
    $listClasses = new ListClassesService();

    $classes = $listClasses->run();

    return response()->json($classes);
  }
  public function show(int $class_id) {
    try {
      $showClass = new ShowClassService();

      $class = $showClass->run($class_id);

      return response()->json($class);
    } catch (\Throwable $error) {
      return response()->json([
        "error" => $error->getMessage()
      ], 400);
    }
  }

  public function create(Request $request) {
    $createClasses = new CreateClassesService();

    try {
      $series = $createClasses->run($request->all());

      return response()->json($series, 201);
    } catch (\Throwable $error) {
      return response()->json([
        "error" => $error->getMessage()
      ], 400);
    }
  }


}
