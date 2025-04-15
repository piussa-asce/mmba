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

    public function team() {
        return view('people');
    }

    public function contacts() {
        return view('contacts');
    }

    public function privacy() {
        return view('privacy');
    }

    public function terms() {
        return view('terms');
    }
}
