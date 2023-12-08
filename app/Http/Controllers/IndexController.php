<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller {
    public function show(): View {
        $products = array(
            array(
                "id" => 1
            ),
            array(
                "id" => 2
            ),
            array(
                "id" => 3
            )
        );

        $data = array(
            "products" => $products
        );
        /*
        {
            "id": 1,
            "title": "iPhone 9",
            "description": "An apple mobile which is nothing like apple",
            "price": 549,
            "discountPercentage": 12.96,
            "rating": 4.69,
            "stock": 94,
            "brand": "Apple",
            "category": "smartphones",
            "thumbnail": "https://i.dummyjson.com/data/products/1/thumbnail.jpg",
            "images": [
                "https://i.dummyjson.com/data/products/1/1.jpg",
                "https://i.dummyjson.com/data/products/1/2.jpg",
                "https://i.dummyjson.com/data/products/1/3.jpg",
                "https://i.dummyjson.com/data/products/1/4.jpg",
                "https://i.dummyjson.com/data/products/1/thumbnail.jpg"
            ]
        }
        */

        //$data = json_decode(Storage::disk("local")->get("products.json"));

        return view("index", ["data" => $data]);
    }
}
