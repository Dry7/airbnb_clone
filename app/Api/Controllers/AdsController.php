<?php

namespace App\Api\Controllers;

use App\Http\Requests;

/**
 * Class AdsController
 * @package App\Api\Controllers
 */
class AdsController extends Controller
{
    /**
     * Search ads
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search()
    {
        return response()->json(
            [
                'total' => 70,
                'from' => 1,
                'to' => 18,
                'pages' => 4,
                'current_page' => 1,
                'items' => [
                    [
                        'id' => 3942703,
                        'name' => '"у нас как дома"4',
                        'type' => 'entire_home',
                        'url' => '/rooms/3942703',
                        'price' => '3200',
                        'guests' => 7,
                        'reviews' => 1,
                        'rating' => null,
                        'is_instant_book' => true,
                        'author' => [
                            'id' => 20430215,
                            'name' => 'Ирина',
                            'url' => '/users/show/20430215',
                            'image' => 'https://a1.muscache.com/im/users/20430215/profile_pic/1408867940/original.jpg?aki_policy=profile_medium',
                            'is_superhost' => false,
                            'is_suitcase' => true
                        ],
                        'images' => [
                            'https://a2.muscache.com/im/pictures/49599012/79ea5b93_original.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/49598893/39714d7b_original.jpg?aki_policy=x_medium'
                        ],
                        'current_image' => 0
                    ],
                    [
                        'id' => 7771418,
                        'name' => 'Очень красивая и чистая квартира',
                        'type' => 'private_room',
                        'url' => '/rooms/7771418',
                        'price' => 2012,
                        'guests' => 2,
                        'reviews' => 3,
                        'rating' => 4.5,
                        'is_instant_book' => false,
                        'author' => [
                            'id' => '40841869',
                            'name' => '',
                            'url' => '/users/show/40841869',
                            'image' => 'https://a2.muscache.com/im/users/40841869/profile_pic/1439145457/original.jpg?aki_policy=profile_medium',
                            'is_superhost' => true,
                            'is_suitcase' => false
                        ],
                        'images' => [
                            'https://a1.muscache.com/im/pictures/100125459/c43a3ce1_original.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/100125596/c431634c_original.jpg?aki_policy=x_medium',
                            'https://a1.muscache.com/im/pictures/100125492/3a1e5a00_original.jpg?aki_policy=x_medium',
                            'https://a0.muscache.com/im/pictures/100125513/0c64c612_original.jpg?aki_policy=x_medium',
                            'https://a1.muscache.com/im/pictures/100125530/784f6d56_original.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/100125553/5d9d950e_original.jpg?aki_policy=x_medium'
                        ],
                        'current_image' => 0
                    ],
                    [
                        'id' => 14733733,
                        'name' => 'Современная квартира с прекрасным видом из окна',
                        'type' => 'shared_room',
                        'url' => '/rooms/14733733?guests=2',
                        'price' => 1984,
                        'guests' => 2,
                        'reviews' => 0,
                        'rating' => null,
                        'is_instant_book' => false,
                        'author' => [
                            'id' => 91763607,
                            'name' => 'Ольга',
                            'url' => '/users/show/91763607',
                            'image' => 'https://a0.muscache.com/im/pictures/2b51cd36-607e-4aa8-bb9c-9b530479784a.jpg?aki_policy=profile_medium',
                            'is_superhost' => false,
                            'is_suitcase' => false
                        ],
                        'images' => [
                            'https://a2.muscache.com/im/pictures/3758e3c6-e66b-4e68-a10a-6ccec5050b76.jpg?aki_policy=x_medium',
                            'https://a0.muscache.com/im/pictures/6cb2a315-ca5c-42ad-9755-c1c03124aa05.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/8822347c-14d3-4b36-b9b7-26036a743785.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/50ff9ec6-9d21-4d70-bbbf-9e9d67b4cf66.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/d2892398-a256-4e8c-a4ba-ea7be4419dbc.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/9a487850-7427-4f87-8039-5c98d53dd42d.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/04caac8d-e473-4990-aa6c-56b275df8881.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/1b408537-120c-4a3c-81b4-e26aa7c17569.jpg?aki_policy=x_medium',
                        ],
                        'current_image' => 0
                    ],
                    [
                        'id' => 12122546,
                        'name' => 'Квартира в ЦЕНТРЕ в новом доме',
                        'type' => 'entire_home',
                        'url' => '/rooms/12122546',
                        'price' => 1472,
                        'guests' => 4,
                        'reviews' => 3,
                        'rating' => 4.5,
                        'is_instant_book' => false,
                        'author' => [
                            'id' => 60041739,
                            'name' => 'Сергей',
                            'url' => '/users/show/60041739',
                            'image' => 'https://a2.muscache.com/im/pictures/9ddd63b1-3c5e-4564-b4e5-ba37ff519c00.jpg?aki_policy=profile_medium',
                            'is_superhost' => false,
                            'is_suitcase' => false
                        ],
                        'images' => [
                            'https://a0.muscache.com/im/pictures/4af221f2-5f63-4267-860e-45c0362bb96d.jpg?aki_policy=x_medium',
                            'https://a0.muscache.com/im/pictures/d9356fd0-79bf-4078-9e10-0926e71c1947.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/e8a98b42-6c01-4e0d-b8cb-e201964a4f47.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/1fb371da-2a45-4ecb-ad16-7ef7de0ca9b1.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/610a8eaf-61b5-4823-944c-d367a8008d07.jpg?aki_policy=x_medium'
                        ],
                        'current_image' => 0
                    ],
                    [
                        'id' => 13676910,
                        'name' => 'Прекрасная 1-комнатная квартира в центре',
                        'type' => 'entire_home',
                        'url' => '/rooms/13676910',
                        'price' => 1984,
                        'guests' => 2,
                        'reviews' => 0,
                        'rating' => null,
                        'is_instant_book' => false,
                        'author' => [
                            'id' => 79436813,
                            'name' => 'Оксана',
                            'url' => '/users/show/79436813',
                            'image' => 'https://a0.muscache.com/im/pictures/ca5d4c0c-c348-483e-9423-aa97b7190497.jpg?aki_policy=profile_medium',
                            'is_superhost' => false,
                            'is_suitcase' => false
                        ],
                        'images' => [
                            'https://a1.muscache.com/im/pictures/5fc4afcc-0733-4b36-9832-7fa17eac5818.jpg?aki_policy=x_medium',
                            'https://a0.muscache.com/im/pictures/32612a1f-66c9-40ef-b184-8a6aecb01dfd.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/a07e9484-7c0b-4f8c-9c17-379cb2c5efcf.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/54a90f62-2fbf-48da-88da-16bd62029d29.jpg?aki_policy=x_medium'
                        ],
                        'current_image' => 0
                    ],
                    [
                        'id' => 11621253,
                        'name' => 'Чистая, уютная квартира от собственника!!!',
                        'type' => 'entire_home',
                        'url' => '/rooms/11621253',
                        'price' => 1728,
                        'guests' => 6,
                        'reviews' => 3,
                        'rating' => 5,
                        'is_instant_book' => false,
                        'author' => [
                            'id' => 61393226,
                            'name' => 'Anna',
                            'url' => '/users/show/61393226',
                            'image' => 'https://a1.muscache.com/im/pictures/123971e3-55e8-4e64-a893-54917559b519.jpg?aki_policy=profile_medium',
                            'is_superhost' => false,
                            'is_suitcase' => false
                        ],
                        'images' => [
                            'https://a1.muscache.com/im/pictures/20ac3395-fddf-4dc9-8986-4f430f3e5ae4.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/57209bd8-feab-4f22-aba7-d6f68d720c3c.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/b8ebed49-698b-4fec-bc16-72156f10e730.jpg?aki_policy=x_medium',
                            'https://a2.muscache.com/im/pictures/bd378cdd-24e7-4c2d-ab24-1d43a6724462.jpg?aki_policy=x_medium'
                        ],
                        'current_image' => 0
                    ]
                ]
            ]
        );
    }
}