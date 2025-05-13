<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // PT
    public function home() {
        return view('pt.home-page');
    }

    public function team() {
        return view('pt.people');
    }

    public function contacts() {
        return view('pt.contacts');
    }

    public function privacy() {
        return view('pt.privacy');
    }

    public function terms() {
        return view('pt.terms');
    }

    // EN
    public function home_en() {
        return view('en.home-page');
    }

    public function team_en() {
        return view('en.people');
    }

    public function contacts_en() {
        return view('en.contacts');
    }

    public function privacy_en() {
        return view('en.privacy');
    }

    public function terms_en() {
        return view('en.terms');
    }
}
