<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(Request $request)
    {
      $obj = [
        'hello' => 'world'
      ];

      return response()->json($obj)->setCallback($request->input('callback'));
    }
}
