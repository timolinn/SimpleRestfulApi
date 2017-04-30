<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function getReports() {

      $reports = User::all();

      if ($reports) {
      return json_encode(array(
        'status' => 'success',
        'data' => $reports->toArray(),
        'message' => 'Reports retrieved successfully!'
      ));
    } else {
      return json_encode(array(
        'status' => 'error',
        'data' => null,
        'error' => array(
          'code' => 404,
          'message' => 'Nothing to Display'
        )
      ));
    }
}

  public function index()
  {
      $reports = User::all();

      if ($reports) {

      return Response::json([
        'status' => 'success',
        'data' => $reports->toArray(),
        'message' => 'Reports retrieved Successfully!'
      ], 200);
    } else {
        return Response::json([
          'error' => [
            'message' => 'NO Reports were found!',
          ]
        ], 404);
    }
  }

  // public function show($id)
  // {
  //   $report = User::find($id);
  //   if ($report) {
  //     return Response::json([
  //       'data' => $report->toArray(),
  //     ]);
  //   } else {
  //       return Response::json([
  //         'error' => [
  //           'message' => 'Reports not found!',
  //         ]
  //       ], 404);
  //   }
  // }

}
