<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CreateSubjectsService;


class SubjectsController extends Controller {

  public function create(Request $request) {
    $createSubject = new CreateSubjectsService();

    try {
      $subject = $createSubject->run($request->all());

      return response()->json($subject, 201);
    } catch (\Throwable $error) {
      return response()->json([
        "error" => $error->getMessage()
      ], 400);
    }
  }


}
