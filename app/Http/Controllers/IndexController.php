<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use \Illuminate\Support\Collection;

class IndexController extends Controller {
    public function show(): View {
        $rawData = DB::table("products")->get();

        $currentPage = is_numeric(request()->page) ? request()->page : 0;
        $elementsPerPage = 5; // is_numeric(request()->limit) ? request()->limit : 10;
        $elementsCounter = $rawData->count();
        $maxPages = ceil($elementsCounter / $elementsPerPage);
        $data = DB::table("products")
            ->skip($currentPage * $elementsPerPage)
            ->take($elementsPerPage)
            ->get();

        $previousPage = $currentPage - 1;
        $nextPage = $currentPage + 1;

        // checks to have all values right
        $previousPage = ($previousPage > 0) ? (($previousPage < $maxPages) ? $previousPage : $maxPages) : 0;
        $nextPage = ($nextPage > 0) ? (($nextPage < $maxPages) ? $nextPage : $maxPages) : 0;

        return view("index")
            ->with("data", $data)
            ->with("pages", array(
                "first" => 0,
                "previous" => $previousPage,
                "current" => $currentPage,
                "next" => $nextPage,
                "last" => $maxPages
            ));
    }
}
