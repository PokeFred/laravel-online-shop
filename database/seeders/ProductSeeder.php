<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                "name" => "iPhone 9",
                "description" => "An apple mobile which is nothing like apple",
                "price" => 549,
                "discountPercentage" => 12.96,
                "stock" => 94,
                "brand" => "Apple",
                "category" => "smartphones",
                "thumbnail" => "https://i.dummyjson.com/data/products/1/thumbnail.jpg"
            ],
            [
                "name" => "iPhone X",
                "description" => "SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...",
                "price" => 899,
                "discountPercentage" => 17.94,
                "stock" => 34,
                "brand" => "Apple",
                "category" => "smartphones",
                "thumbnail" => "https://i.dummyjson.com/data/products/2/thumbnail.jpg"
            ],
            [
                "name" => "Samsung Universe 9",
                "description" => "Samsung's new variant which goes beyond Galaxy to the Universe",
                "price" => 1249,
                "discountPercentage" => 15.46,
                "stock" => 36,
                "brand" => "Samsung",
                "category" => "smartphones",
                "thumbnail" => "https://i.dummyjson.com/data/products/3/thumbnail.jpg"
            ],
            [
                "name" => "OPPOF19",
                "description" => "OPPO F19 is officially announced on April 2021.",
                "price" => 280,
                "discountPercentage" => 17.91,
                "stock" => 123,
                "brand" => "OPPO",
                "category" => "smartphones",
                "thumbnail" => "https://i.dummyjson.com/data/products/4/thumbnail.jpg"
            ],
            [
                "name" => "Huawei P30",
                "description" => "Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.",
                "price" => 499,
                "discountPercentage" => 10.58,
                "stock" => 32,
                "brand" => "Huawei",
                "category" => "smartphones",
                "thumbnail" => "https://i.dummyjson.com/data/products/5/thumbnail.jpg"
            ],
            [
                "name" => "MacBook Pro",
                "description" => "MacBook Pro 2021 with mini-LED display may launch between September, November",
                "price" => 1749,
                "discountPercentage" => 11.02,
                "stock" => 83,
                "brand" => "Apple",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/6/thumbnail.png"
            ],
            [
                "name" => "Samsung Galaxy Book",
                "description" => "Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched",
                "price" => 1499,
                "discountPercentage" => 4.15,
                "stock" => 50,
                "brand" => "Samsung",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/7/thumbnail.jpg"
            ],
            [
                "name" => "Microsoft Surface Laptop 4",
                "description" => "Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen.",
                "price" => 1499,
                "discountPercentage" => 10.23,
                "stock" => 68,
                "brand" => "Microsoft Surface",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/8/thumbnail.jpg"
            ],
            [
                "name" => "Infinix INBOOK",
                "description" => "Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty",
                "price" => 1099,
                "discountPercentage" => 11.83,
                "stock" => 96,
                "brand" => "Infinix",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/9/thumbnail.jpg"
            ],
            [
                "name" => "HP Pavilion 15-DK1056WM",
                "description" => "HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10",
                "price" => 1099,
                "discountPercentage" => 6.18,
                "stock" => 89,
                "brand" => "HP Pavilion",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/10/thumbnail.jpeg"
            ],
            [
                "name" => "Dell XPS 13",
                "description" => "Dell XPS 13 (9310) 13-inch Laptop (11th Gen Core i7/16GB/512GB SSD/Win 10 + MS Office/Intel Iris Xe Graphics), Silver",
                "price" => 1699,
                "discountPercentage" => 8.24,
                "stock" => 45,
                "brand" => "Dell",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/11/thumbnail.jpg"
            ],
            [
                "name" => "Lenovo ThinkPad X1 Carbon",
                "description" => "Lenovo ThinkPad X1 Carbon Gen 9 (2021) Laptop Comes With Core i7-1165G7 Processor, HDR Display",
                "price" => 1899,
                "discountPercentage" => 12.15,
                "stock" => 27,
                "brand" => "Lenovo",
                "category" => "laptops",
                "thumbnail" => "https://i.dummyjson.com/data/products/12/thumbnail.jpg"
            ],
            [
                "name" => "Sony PlayStation 5",
                "description" => "Sony's PlayStation 5 delivers lightning-fast loading, haptic feedback, and stunning graphics.",
                "price" => 499,
                "discountPercentage" => 0,
                "stock" => 10,
                "brand" => "Sony",
                "category" => "gaming",
                "thumbnail" => "https://i.dummyjson.com/data/products/13/thumbnail.jpg"
            ],
            [
                "name" => "Xbox Series X",
                "description" => "Microsoft's Xbox Series X is a powerful gaming console with a next-gen AMD processor and RDNA 2 graphics architecture.",
                "price" => 499,
                "discountPercentage" => 5.01,
                "stock" => 15,
                "brand" => "Microsoft",
                "category" => "gaming",
                "thumbnail" => "https://i.dummyjson.com/data/products/14/thumbnail.jpg"
            ],
            [
                "name" => "Nintendo Switch",
                "description" => "The Nintendo Switch is a versatile gaming console that can be used both at home and on the go.",
                "price" => 299,
                "discountPercentage" => 0,
                "stock" => 20,
                "brand" => "Nintendo",
                "category" => "gaming",
                "thumbnail" => "https://i.dummyjson.com/data/products/15/thumbnail.jpg"
            ],
            [
                "name" => "Canon EOS R5",
                "description" => "The Canon EOS R5 is a full-frame mirrorless camera with 8K video recording and advanced autofocus capabilities.",
                "price" => 3899,
                "discountPercentage" => 9.75,
                "stock" => 8,
                "brand" => "Canon",
                "category" => "cameras",
                "thumbnail" => "https://i.dummyjson.com/data/products/16/thumbnail.jpg"
            ],
            [
                "name" => "Nikon Z6 II",
                "description" => "The Nikon Z6 II is a versatile mirrorless camera with in-body image stabilization and 4K video recording.",
                "price" => 1999,
                "discountPercentage" => 15.38,
                "stock" => 12,
                "brand" => "Nikon",
                "category" => "cameras",
                "thumbnail" => "https://i.dummyjson.com/data/products/17/thumbnail.jpg"
            ],
            [
                "name" => "Sony Alpha 7 IV",
                "description" => "Sony Alpha 7 IV is a high-resolution mirrorless camera with advanced autofocus and 4K video recording capabilities.",
                "price" => 2499,
                "discountPercentage" => 10.04,
                "stock" => 18,
                "brand" => "Sony",
                "category" => "cameras",
                "thumbnail" => "https://i.dummyjson.com/data/products/18/thumbnail.jpg"
            ],
            [
                "name" => "Bose QuietComfort 45",
                "description" => "Bose QuietComfort 45 is a premium noise-canceling headphone with comfortable ear cushions and clear sound quality.",
                "price" => 329,
                "discountPercentage" => 6.37,
                "stock" => 25,
                "brand" => "Bose",
                "category" => "audio",
                "thumbnail" => "https://i.dummyjson.com/data/products/19/thumbnail.jpg"
            ],
            [
                "name" => "Sony WH-1000XM4",
                "description" => "Sony WH-1000XM4 is a popular wireless noise-canceling headphone with excellent audio quality and long battery life.",
                "price" => 349,
                "discountPercentage" => 8.59,
                "stock" => 30,
                "brand" => "Sony",
                "category" => "audio",
                "thumbnail" => "https://i.dummyjson.com/data/products/20/thumbnail.jpg"
            ],
            [
                "name" => "Samsung Galaxy S21",
                "description" => "Samsung Galaxy S21 5G Smartphone with 6.2\" Dynamic AMOLED 2X Display, 8GB RAM, 128GB Storage, 64MP Camera, and 4000mAh Battery.",
                "price" => 799,
                "discountPercentage" => 10.01,
                "stock" => 22,
                "brand" => "Samsung",
                "category" => "phones",
                "thumbnail" => "https://i.dummyjson.com/data/products/21/thumbnail.jpg"
            ],
            [
                "name" => "iPhone 13 Pro",
                "description" => "Apple iPhone 13 Pro with 6.1-inch Super Retina XDR display, A15 Bionic chip, Pro camera system, and Ceramic Shield front cover.",
                "price" => 999,
                "discountPercentage" => 5.02,
                "stock" => 15,
                "brand" => "Apple",
                "category" => "phones",
                "thumbnail" => "https://i.dummyjson.com/data/products/22/thumbnail.jpg"
            ],
            [
                "name" => "Google Pixel 6",
                "description" => "Google Pixel 6 with 6.4-inch AMOLED display, Tensor chip, and advanced camera features for stunning photos.",
                "price" => 699,
                "discountPercentage" => 8.25,
                "stock" => 18,
                "brand" => "Google",
                "category" => "phones",
                "thumbnail" => "https://i.dummyjson.com/data/products/23/thumbnail.jpg"
            ],
            [
                "name" => "iPad Air (2022)",
                "description" => "Apple iPad Air (2022) with 10.9-inch Liquid Retina display, A15 Bionic chip, and support for Apple Pencil (2nd generation).",
                "price" => 499,
                "discountPercentage" => 0,
                "stock" => 25,
                "brand" => "Apple",
                "category" => "tablets",
                "thumbnail" => "https://i.dummyjson.com/data/products/24/thumbnail.jpg"
            ],
            [
                "name" => "Samsung Galaxy Tab S7+",
                "description" => "Samsung Galaxy Tab S7+ with 12.4-inch Super AMOLED display, S Pen, and AKG quad speakers for immersive entertainment.",
                "price" => 849,
                "discountPercentage" => 7.5,
                "stock" => 20,
                "brand" => "Samsung",
                "category" => "tablets",
                "thumbnail" => "https://i.dummyjson.com/data/products/25/thumbnail.jpg"
            ],
            [
                "name" => "Fitbit Charge 5",
                "description" => "Fitbit Charge 5 fitness and activity tracker with built-in GPS, heart rate tracking, and EDA sensor for stress management.",
                "price" => 179,
                "discountPercentage" => 12.1,
                "stock" => 30,
                "brand" => "Fitbit",
                "category" => "wearables",
                "thumbnail" => "https://i.dummyjson.com/data/products/26/thumbnail.jpg"
            ],
            [
                "name" => "Garmin Venu 2",
                "description" => "Garmin Venu 2 GPS smartwatch with a bright AMOLED display, health monitoring features, and over 25 built-in sports apps.",
                "price" => 399,
                "discountPercentage" => 9.99,
                "stock" => 12,
                "brand" => "Garmin",
                "category" => "wearables",
                "thumbnail" => "https://i.dummyjson.com/data/products/27/thumbnail.jpg"
            ],
            [
                "name" => "DJI Mavic Air 2",
                "description" => "DJI Mavic Air 2 drone with 48MP camera, 8K Hyperlapse, and intelligent shooting modes for stunning aerial photography.",
                "price" => 799,
                "discountPercentage" => 5.55,
                "stock" => 8,
                "brand" => "DJI",
                "category" => "drones",
                "thumbnail" => "https://i.dummyjson.com/data/products/28/thumbnail.jpg"
            ],
            [
                "name" => "Bose SoundLink Revolve+",
                "description" => "Bose SoundLink Revolve+ portable Bluetooth speaker with 360-degree sound, water-resistant design, and long battery life.",
                "price" => 299,
                "discountPercentage" => 8.75,
                "stock" => 15,
                "brand" => "Bose",
                "category" => "audio",
                "thumbnail" => "https://i.dummyjson.com/data/products/29/thumbnail.jpg"
            ],
            [
                "name" => "LG CX OLED TV",
                "description" => "LG CX 4K OLED TV with AI ThinQ, Dolby Vision IQ, and NVIDIA G-SYNC compatibility for an immersive viewing experience.",
                "price" => 1999,
                "discountPercentage" => 10.2,
                "stock" => 10,
                "brand" => "LG",
                "category" => "tv",
                "thumbnail" => "https://i.dummyjson.com/data/products/30/thumbnail.jpg"
            ]
        ];

        //DB::table("product")->insert($arr[0]);
        foreach ($arr as $product) {
            DB::table("products")->insert($product);
        }
    }
}
