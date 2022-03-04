<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $data = Movie::all();

        return view('home', compact("data"));
    }
}

?>