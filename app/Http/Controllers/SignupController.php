<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Redirect;

class SignupController extends Controller
{
  public function create()
  {
    return view('signup.form');
  }

  public function store(Requests\SignupFormRequest $request)
  {
    // TODO Save the users email
    $registration = \App\Registration::firstOrCreate([
      'email' => $request->email,
    ]);

    return redirect()->route('signup_complete');
  }

  public function complete()
  {
    return view('signup.complete');
  }
}
