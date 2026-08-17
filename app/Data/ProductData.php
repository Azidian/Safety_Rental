<?php

namespace App\Data;

class ProductData
{
    public static function getProducts(): array
    {
        return [
            [
                'id' => '1',
                'name' => 'TV',
                'description' => 'Best TV',
                'price' => 3500000,
            ],
            [
                'id' => '2',
                'name' => 'iPhone',
                'description' => 'Best iPhone',
                'price' => 7000000,
            ],
            [
                'id' => '3',
                'name' => 'Chromecast',
                'description' => 'Best Chromecast',
                'price' => 200000,
            ],
            [
                'id' => '4',
                'name' => 'Glasses',
                'description' => 'Best Glasses',
                'price' => 500000,
            ],
        ];
    }
}
