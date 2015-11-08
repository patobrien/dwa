<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {

      // $new_user = new \App\User;
      // $new_user->name = 'Pat';
      // $new_user->email = 'pat@dwa15.com';
      // $new_user->password = bcrypt($request->input('password'));
      // $new_user->save();

      echo 'test';
    }
}
