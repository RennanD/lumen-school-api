<?php

namespace App\Http\Controllers;

use App\Services\CreateClassesService;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

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
