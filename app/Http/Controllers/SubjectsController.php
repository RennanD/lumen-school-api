<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CreateSubjectsService;
use App\Services\ListSubjectsService;

class SubjectsController extends Controller {

  public function index() {
    $listSubjects = new ListSubjectsService();

    $subjects = $listSubjects->run();

    return response()->json($subjects);
  }

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
