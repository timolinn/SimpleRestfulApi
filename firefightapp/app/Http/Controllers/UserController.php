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
