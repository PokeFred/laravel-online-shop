<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SearchController extends Controller {
    public function show(): View {
        return view("search");
    }
}
