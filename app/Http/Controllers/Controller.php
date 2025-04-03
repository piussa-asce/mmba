<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home() {
        return view('home-page');
    }

    public function people() {
        return view('people.people');
    }

    public function handlePeople(string $name) {
        if ($name == "vasco") return view('people.vasco');
        return redirect('/');
    }
}
