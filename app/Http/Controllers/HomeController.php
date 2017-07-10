<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function user(Request $request)
    {
        $user = User::find(1);

        // Active should be set to false, if no checkbox checked
        if ('POST' === $request->method()) {
            if (false === $request->has('active')) {
                $request->request->add(['active' => false]);
            }
        }

        return view('user', compact('user'));
    }
}
