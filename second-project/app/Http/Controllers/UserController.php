<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $fullName;

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name.' '. $request->last_name;
        return view('test', ['result' => $this->fullName]);
    }
}
