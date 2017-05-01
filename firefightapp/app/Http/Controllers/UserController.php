<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Collection;
use App\Http\Requests;

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
      //return User::all();

      $reports = User::all();

      return json_encode(array(
        'data' => $reports->toArray(),
        'message' => 'reports retrieved Successfully'
      ));

    //   if ($reports) {

    //   return Response::json([
    //     'status' => 'success',
    //     'data' => $reports->toArray(),
    //     'message' => 'Reports retrieved Successfully!'
    //   ], 200);
    // } else {
    //     return Response::json([
    //       'error' => [
    //         'message' => 'NO Reports were found!',
    //       ]
    //     ], 404);
    // }
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

  public function store(Request $request)
  {
    $report = new User([
      'phone_number' => $request->input('phone_number'),
      'fire_location' => $request->input('fire_location'),
      'fire_magnitude' => $request->input('fire_magnitude'),
      'fire_origin' => $request->input('fire_origin'),
      'fire_object' => $request->input('fire_object'),
      'trapped_people' => $request->input('trapped_people')
    ]);

    $report->save();

    return json_encode([
                'message' => 'Your Report was received Successfully. Thank you for saving a life'
    ]);

  }

}
