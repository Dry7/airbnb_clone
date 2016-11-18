<?php

namespace App\Api\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


/**
 * Class AdsController
 * @package App\Api\Controllers
 */
class AdsController extends Controller
{
    private $images = [
        'https://a2.muscache.com/im/pictures/49599012/79ea5b93_original.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/49598893/39714d7b_original.jpg?aki_policy=x_medium',
        'https://a1.muscache.com/im/pictures/100125459/c43a3ce1_original.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/100125596/c431634c_original.jpg?aki_policy=x_medium',
        'https://a1.muscache.com/im/pictures/100125492/3a1e5a00_original.jpg?aki_policy=x_medium',
        'https://a0.muscache.com/im/pictures/100125513/0c64c612_original.jpg?aki_policy=x_medium',
        'https://a1.muscache.com/im/pictures/100125530/784f6d56_original.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/100125553/5d9d950e_original.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/3758e3c6-e66b-4e68-a10a-6ccec5050b76.jpg?aki_policy=x_medium',
        'https://a0.muscache.com/im/pictures/6cb2a315-ca5c-42ad-9755-c1c03124aa05.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/8822347c-14d3-4b36-b9b7-26036a743785.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/50ff9ec6-9d21-4d70-bbbf-9e9d67b4cf66.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/d2892398-a256-4e8c-a4ba-ea7be4419dbc.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/9a487850-7427-4f87-8039-5c98d53dd42d.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/04caac8d-e473-4990-aa6c-56b275df8881.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/1b408537-120c-4a3c-81b4-e26aa7c17569.jpg?aki_policy=x_medium',
        'https://a0.muscache.com/im/pictures/4af221f2-5f63-4267-860e-45c0362bb96d.jpg?aki_policy=x_medium',
        'https://a0.muscache.com/im/pictures/d9356fd0-79bf-4078-9e10-0926e71c1947.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/e8a98b42-6c01-4e0d-b8cb-e201964a4f47.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/1fb371da-2a45-4ecb-ad16-7ef7de0ca9b1.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/610a8eaf-61b5-4823-944c-d367a8008d07.jpg?aki_policy=x_medium',
        'https://a1.muscache.com/im/pictures/5fc4afcc-0733-4b36-9832-7fa17eac5818.jpg?aki_policy=x_medium',
        'https://a0.muscache.com/im/pictures/32612a1f-66c9-40ef-b184-8a6aecb01dfd.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/a07e9484-7c0b-4f8c-9c17-379cb2c5efcf.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/54a90f62-2fbf-48da-88da-16bd62029d29.jpg?aki_policy=x_medium',
        'https://a1.muscache.com/im/pictures/20ac3395-fddf-4dc9-8986-4f430f3e5ae4.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/57209bd8-feab-4f22-aba7-d6f68d720c3c.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/b8ebed49-698b-4fec-bc16-72156f10e730.jpg?aki_policy=x_medium',
        'https://a2.muscache.com/im/pictures/bd378cdd-24e7-4c2d-ab24-1d43a6724462.jpg?aki_policy=x_medium'
    ];

    private $authors = [
        [
            'id' => 20430215,
            'name' => 'Ирина',
            'url' => '/users/show/20430215',
            'image' => 'https://a1.muscache.com/im/users/20430215/profile_pic/1408867940/original.jpg?aki_policy=profile_medium',
            'is_superhost' => false,
            'is_suitcase' => true,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ],
        [
            'id' => '40841869',
            'name' => '',
            'url' => '/users/show/40841869',
            'image' => 'https://a2.muscache.com/im/users/40841869/profile_pic/1439145457/original.jpg?aki_policy=profile_medium',
            'is_superhost' => true,
            'is_suitcase' => false,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ],
        [
            'id' => 91763607,
            'name' => 'Ольга',
            'url' => '/users/show/91763607',
            'image' => 'https://a0.muscache.com/im/pictures/2b51cd36-607e-4aa8-bb9c-9b530479784a.jpg?aki_policy=profile_medium',
            'is_superhost' => false,
            'is_suitcase' => false,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ],
        [
            'id' => 60041739,
            'name' => 'Сергей',
            'url' => '/users/show/60041739',
            'image' => 'https://a2.muscache.com/im/pictures/9ddd63b1-3c5e-4564-b4e5-ba37ff519c00.jpg?aki_policy=profile_medium',
            'is_superhost' => false,
            'is_suitcase' => false,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ],
        [
            'id' => 79436813,
            'name' => 'Оксана',
            'url' => '/users/show/79436813',
            'image' => 'https://a0.muscache.com/im/pictures/ca5d4c0c-c348-483e-9423-aa97b7190497.jpg?aki_policy=profile_medium',
            'is_superhost' => false,
            'is_suitcase' => false,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ],
        [
            'id' => 61393226,
            'name' => 'Anna',
            'url' => '/users/show/61393226',
            'image' => 'https://a1.muscache.com/im/pictures/123971e3-55e8-4e64-a893-54917559b519.jpg?aki_policy=profile_medium',
            'is_superhost' => false,
            'is_suitcase' => false,
            'country' => 'ru',
            'created_at' => '2015-01-01',
            'reviews' => 10,
            'response_rate' => 100,
            'response_time' => 'within_an_hour',
            'verified' => true
        ]
    ];

    private $names = [
        'у нас как дома',
        'Очень красивая и чистая квартира',
        'Современная квартира с прекрасным видом из окна',
        'Квартира в ЦЕНТРЕ в новом доме',
        'Прекрасная 1-комнатная квартира в центре',
        'Чистая, уютная квартира от собственника!!!'
    ];

    private $lat = 52.6121996;

    private $lng = 39.5981225;

    private $total = 70;

    private $ads_per_page = 18;

    private function getRating()
    {
        $rating = rand(1,5);

        return ($rating < 5) ? $rating + (rand(0,1)/2) : $rating;
    }

    private function getRatings()
    {
        return (object)[
            'summary' => $this->getRating(),
            'accuracy' => $this->getRating(),
            'communication' => $this->getRating(),
            'cleanliness' => $this->getRating(),
            'location' => $this->getRating(),
            'check_in' => $this->getRating(),
            'value' => $this->getRating()
        ];
    }

    private function getCoordinate($coordinate)
    {
        return $coordinate + ((bool)rand(0, 1) ? 1 : -1) * rand(1,100)/2000;
    }

    public function search(Request $request)
    {
        $page = (int)$request->input('page', 1);
        for ($i = 0, $items = []; $i < 18; $i++) {
            $id = rand(1000000, 9999999);
            $items[] = [
                'id' => $id,
                'name' => $this->names[rand(0, sizeof($this->names)-1)],
                'type' => 'entire_home',
                'url' => '/rooms/' . $id,
                'price' => rand(10,99) * 100,
                'guests' => rand(1, 10),
                'reviews' => rand(0, 20),
                'rating' => $this->getRating(),
                'is_instant_book' => (bool)rand(0,1),
                'author' => $this->authors[rand(0, sizeof($this->authors)-1)],
                'images' => [
                    $this->images[rand(0, sizeof($this->images)-1)],
                ],
                'current_image' => 0,
                'coordinates' => [
                    'lat' => $this->getCoordinate($this->lat),
                    'lng' => $this->getCoordinate($this->lng)
                ]
            ];
        }

        return response()->json(
            [
                'total' => $this->total,
                'from' => 1 + (($page - 1) * $this->ads_per_page),
                'to' => min($this->total, $this->ads_per_page + (($page - 1) * $this->ads_per_page)),
                'pages' => ceil($this->total / $this->ads_per_page),
                'current_page' => $page,
                'items' => $items
            ]
        );
    }

    /**
     * Search ads
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search2()
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

    public function details(Request $request, $id)
    {
        return response()->json([
            'id' => $id,
            'name' => 'Очень красивая и чистая квартира',
            'house_type' => 1,
            'type' => $this->getRoomType(),
            'url' => '/rooms/' . $id,
            'price' => '2102',
            'guests' => rand(1, 10),
            'bedrooms' => rand(1, 10),
            'bathrooms' => rand(1, 8),
            'beds' => rand(1, 16),
            'amenities' => $this->getAmenities(),
            'languages' => $this->getLanguages(),
            'reviews' => rand(0, 20),
            'ratings' => $this->getRatings(),
            'is_instant_book' => (bool)rand(0,1),
            'city' => 'Липецк, Липецкая область, Russia',
            'about' => 'Центр города.Рядом магазины и кафе.',
            'accommodates' => rand(1, 10),
            'extra_people' => 'No Charge',
            'cancellation' => 'flexible',
            'description' => '<p><span>Центр города.Рядом магазины и кафе.</span></p><p><span>Дизайн квартиры выполнен в стиле Франции.Французский стиль в интерьере зависит от гаммы цветов. В этой квартире использованы традиционные для этого стиля  розовый в сочетании с белым и серебристым.  Гламурную, изысканную обстановку создаёт игра света и текстиль, заставляющий её мерцать.</span></p><p><span>В квартире есть вся необходимая бытовая техника: TV(161 канал), Wi-Fi, холодильник, стиральная машина, кондиционер, СВЧ-печь, электрический чайник, сушилка для белья, гладильная доска, утюг,  фен.</span><br /><span>Столовый инвентарь: Кастрюля, сковородка, тарелки, чашки, ложки,бокалы,стопки, вилки, ножи.</span><br /><span>Постельное бельё комплекты-2х спальные и 1,5 спальные, полотенца, тапочки, туалетная бумага, 1,5 л бутылка питьевой воды.</span></p><p><span>Возможен предварительный заказ продуктов питания.Эта услуга бесплатная ,оплачиваете только чек из магазина.</span></p><p><span>Квартира расположена в оживлённом центре города с развитой инфраструктурой. В шаговой доступности находится центральный рынок, продуктовые магазины, кафе, пивной ресторан, торговые центры.</span></p>',
            'house_rules' => '<p><span>Мы ценим Ваш комфорт, безопасность и гигиену!</span></p><p><span>1. Квартира не сдаётся для проведения вечеринок, праздников, корпоративов .</span><br /><span>2. Квартира не сдаётся несовершеннолетним лицам.</span><br /><span>3. Количество проживающих в квартире, ограничено количеством спальных мест.</span><br /><span>4. Согласно законодательству РФ, с 23-00 необходимо соблюдать тишину.</span><br /><span>5. Соблюдать порядок и чистоту.</span><br /><span>6.Курение в квартире запрещено.</span></p>',
            'minimum_stay' => 1,
            'week_discount' => 6,
            'month_discount' => 13,
            'cleaning_fee' => 1685,
            'service_fee' => 674,
            'author' => $this->authors[rand(0, sizeof($this->authors)-1)],
            'images' => [
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]],
                (object)['title' => 'title', 'url' => $this->images[rand(0, sizeof($this->images)-1)]]
            ],
            'current_image' => 0,
            'coordinates' => [
                'lat' => $this->getCoordinate($this->lat),
                'lng' => $this->getCoordinate($this->lng)
            ]
        ]);
    }

    public function reviews(Request $request, $id)
    {
        return response()->json([
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review(),
            $this->review()
        ]);
    }

    private function review()
    {
        return (object)[
            'id' => rand(1, 1000),
            'review' => [
                'I had a great time and the hosts were great!',
                'Kyana and Deborah (mom) were wonderful hosts. They were friendly and engaging. Yet they gave you space to do your own thing and allowed you your privacy.',
                'I had a great time with Kyana and I felt like I knew her from the moment I walked into her home. There aren\'t many times that you meet strangers that can become a friend and I feel she has been that. You won\'t regret staying her and her infectious laugh and all around good spirit. The house is nice and it is very quiet. Kudos!',
                'It\'s a wonderful trip. Good location, the apartment is very convinient to the subway station just 3 minutes to arrive. Kyana is really a good person who let us feel Wow just like stay in an old friend\'s home. many thanks.',
                'The place is great, clean and so clos to the subway. Kyana was welcoming and helpful during my whole stay. I recommend this place to everybody!',
                'The listing was accurate. The bed is very comfortable. The neighborhood is nice and felt safe. People in the building and on the street were friendly. The subway and bus are practically at the door so it\'s very easy to get around. Kyana and her friend Astra were very gracious hostesses. They are both warm, kind, friendly, generous, accommodating, tolerant, and open. Kyana communicated with me ahead of time about our plans and preferences in order to prepare specifically for us, and provided lots of information. She and Astra went above and beyond to facilitate our stay and make us comfortable! We are glad to have met them and would be happy to stay with them again.',
                'The place is convenient to access. And it is safe around. Kyana is a very nice host! She provided us everything we want, and she bought us a shampoo! Before we left, she was kind to give us two apples and bottled water. Thanks for giving us such a nice trip!',
                'Kyana and Astra were best hosts I have had so far using Airbnb. They were patient and obliging despite we arrived around 3:00 am. They were kind enough to provide breakfast for us and accommodate to our wants when possible. Despite the purpose of my trip was attending a conference, I asked Kyana for advice on things to do in the area and in the city in general and she took it very seriously. Communication was timely. The place is roomy and it is located in a safe area. The room is nice, with conditioning air, a nice mattress, and closet. Nothing fancy, but just about what a traveler needs. The house is in a building literally next to a train station that connects you to Manhattan and obviously to any other place you may need to go. I cannot think of a better place to stay for a visit to New York for an affordable price. If we go back this place will be my first option because we felt myself at home.',
                'The location is very convenient... Turn left after the station and the first stairs downwards and it\'s at the right around the small garden. If you walk till the supermarket it means you missed the stairs. Room is spacious and clean enough. Of course the building is rather old but definitely livable. Worth it for the price.',
                'Our stay at the apartment was great. The apartment is pretty big, the room is spacious enough, and the bed is awesome. Nothing fancy, but our needs were all met. It was clean enough, and pleasant. The location is good, super close to the subway (line 3), and I\'d say we felt pretty safe. We didn\'t get to meet Kyana, but we were hosted by her friend Astra, who was great. Kyana made sure to check in with us, and was available for anything we needed. Keep in mind that the apartment is not exactly in Manhattan, so the "main attractions" are a bit of a ways away. But the reasonable price is worth it.',
            ][rand(0, 9)],
            'created_at' => '2016-10-10',
            'answer' => [
                null,
                'I\'m so glad - I love for my guests to feel welcome here :-). Don\'t forget about your Harlem family, see you next year!!!',
                'Hi Naama, Thanks for the review! Manhattan is a big island, and while we are at the north end, we are on the island just before the border. Manhattan island is separated from the Bronx by the east river which you can see from the window. The island is broken into many neighborhoods, some of the main attractions that you might be thinking about (e.g., empire state building, times square) are in midtown Manhattan, while others (e.g., liberty island, Chelsea Piers) are accessible from lower Manhattan. See you on your next visit!'
            ][rand(0, 2)],
            'answer_created_at' => '2016-10-10',
            'author' => $this->authors[rand(0, sizeof($this->authors)-1)],
        ];
    }

    private function getAmenities()
    {
        $amenities = [];
        foreach ([4, 7, 8, 43, 5, 16, 28, 2, 36, 14, 34, 21, 40, 31, 39, 37, 9, 45, 44, 30, 25, 27, 3, 46, 47, 42, 12, 38, 41, 35, 11, 32, 1, 33, 6] as $amenity) {
            if (rand(0,1) == 0) {
                $amenities[] = $amenity;
            }
        }

        return $amenities;
    }

    private function getLanguages()
    {
        $languages = [];
        foreach ([1, 32] as $language) {
            if (rand(0,1) == 0) {
                $languages[] = $language;
            }
        }

        return $languages;
    }

    private function getRoomType()
    {
        return ['entire_home', 'private_room', 'shared_room'][rand(0,2)];
    }

    public function amenities()
    {
        return response()->json([
            (object)['id' => 4,  'name' => 'Wireless Internet',         'icon' => 'wifi', 'filter' => true],
            (object)['id' => 7,  'name' => 'Pool',                      'icon' => 'pool', 'filter' => false],
            (object)['id' => 8,  'name' => 'Kitchen',                   'icon' => 'meal', 'filter' => true],
            (object)['id' => 43, 'name' => '24-Hour Check-in',          'icon' => null, 'filter' => true],
            (object)['id' => 5,  'name' => 'Air Conditioning',          'icon' => 'air-conditioning', 'filter' => true],
            (object)['id' => 16, 'name' => 'Breakfast',                 'icon' => 'cup', 'filter' => true],
            (object)['id' => 28, 'name' => 'Buzzer/Wireless Intercom',  'icon' => 'intercom', 'filter' => true],
            (object)['id' => 2,  'name' => 'Cable TV',                  'icon' => 'desktop', 'filter' => true],
            (object)['id' => 36, 'name' => 'Carbon Monoxide Detector',  'icon' => null, 'filter' => false],
            (object)['id' => 14, 'name' => 'Doorman',                   'icon' => 'doorman', 'filter' => true],
            (object)['id' => 34, 'name' => 'Dryer',                     'icon' => 'dryer', 'filter' => true],
            (object)['id' => 21, 'name' => 'Elevator in Building',      'icon' => 'elevator', 'filter' => false],
            (object)['id' => 40, 'name' => 'Essentials',                'icon' => 'essentials', 'filter' => false],
            (object)['id' => 31, 'name' => 'Family/Kid Friendly',       'icon' => 'family', 'filter' => true],
            (object)['id' => 39, 'name' => 'Fire Extinguisher',         'icon' => 'fire-alarm', 'filter' => false],
            (object)['id' => 37, 'name' => 'First Aid Kit',             'icon' => null, 'filter' => false],
            (object)['id' => 9,  'name' => 'Free Parking on Premises',  'icon' => 'parking', 'filter' => false],
            (object)['id' => 15, 'name' => 'Gym',                       'icon' => 'gym', 'filter' => false],
            (object)['id' => 45, 'name' => 'Hair Dryer',                'icon' => 'hair-dryer', 'filter' => true],
            (object)['id' => 44, 'name' => 'Hangers',                   'icon' => 'hangers', 'filter' => true],
            (object)['id' => 30, 'name' => 'Heating',                   'icon' => 'heating', 'filter' => true],
            (object)['id' => 25, 'name' => 'Hot Tub',                   'icon' => 'hot-tub', 'filter' => false],
            (object)['id' => 27, 'name' => 'Indoor Fireplace',          'icon' => 'fireplace', 'filter' => true],
            (object)['id' => 3,  'name' => 'Internet',                  'icon' => 'internet', 'filter' => true],
            (object)['id' => 46, 'name' => 'Iron',                      'icon' => 'iron', 'filter' => true],
            (object)['id' => 47, 'name' => 'Laptop Friendly Workspace', 'icon' => 'laptop', 'filter' => true],
            (object)['id' => 42, 'name' => 'Lock on Bedroom Door',      'icon' => 'lock', 'filter' => true],
            (object)['id' => 12, 'name' => 'Pets Allowed',              'icon' => 'paw', 'filter' => false],
            (object)['id' => 38, 'name' => 'Safety Card',               'icon' => 'home-safety', 'filter' => false],
            (object)['id' => 41, 'name' => 'Shampoo',                   'icon' => 'shampoo', 'filter' => true],
            (object)['id' => 35, 'name' => 'Smoke Detector',            'icon' => null, 'filter' => false],
            (object)['id' => 11, 'name' => 'Smoking Allowed',           'icon' => 'smoking', 'filter' => false],
            (object)['id' => 32, 'name' => 'Suitable for Events',       'icon' => 'events', 'filter' => false],
            (object)['id' => 1,  'name' => 'TV',                        'icon' => 'tv', 'filter' => false],
            (object)['id' => 33, 'name' => 'Washer',                    'icon' => 'washer', 'filter' => true],
            (object)['id' => 6,  'name' => 'Wheelchair Accessible',     'icon' => 'accessible', 'filter' => false],
            (object)['id' => 51, 'name' => 'Self Check-In',             'icon' => null, 'filter' => false]
        ]);
    }
    
    public function house_types()
    {
        return response()->json([
            (object)['id' => 2,  'name' => 'House'],
            (object)['id' => 1,  'name' => 'Apartment'],
            (object)['id' => 3,  'name' => 'Bed &amp; Breakfast'],
            (object)['id' => 43, 'name' => 'Boutique hotel'],
            (object)['id' => 44, 'name' => 'Nature lodge'],
            (object)['id' => 45, 'name' => 'Hostel'],
            (object)['id' => 46, 'name' => 'Timeshare'],
            (object)['id' => 47, 'name' => 'Serviced apartment'],
            (object)['id' => 48, 'name' => 'Minsu (Taiwan)'],
            (object)['id' => 49, 'name' => 'Ryokan (Japan)'],
            (object)['id' => 50, 'name' => 'Pension (Korea)'],
            (object)['id' => 51, 'name' => 'Heritage hotel (India)'],
            (object)['id' => 8,  'name' => 'Boat'],
            (object)['id' => 38, 'name' => 'Bungalow'],
            (object)['id' => 4,  'name' => 'Cabin'],
            (object)['id' => 5,  'name' => 'Castle'],
            (object)['id' => 18, 'name' => 'Cave'],
            (object)['id' => 22, 'name' => 'Chalet'],
            (object)['id' => 37, 'name' => 'Condominium'],
            (object)['id' => 9,  'name' => 'Dorm'],
            (object)['id' => 23, 'name' => 'Earth House'],
            (object)['id' => 40, 'name' => 'Guesthouse'],
            (object)['id' => 24, 'name' => 'Hut'],
            (object)['id' => 12, 'name' => 'Igloo'],
            (object)['id' => 19, 'name' => 'Island'],
            (object)['id' => 10, 'name' => 'Lighthouse'],
            (object)['id' => 35, 'name' => 'Loft'],
            (object)['id' => 28, 'name' => 'Plane'],
            (object)['id' => 32, 'name' => 'Camper/RV'],
            (object)['id' => 34, 'name' => 'Tent'],
            (object)['id' => 16, 'name' => 'Tipi'],
            (object)['id' => 36, 'name' => 'Townhouse'],
            (object)['id' => 25, 'name' => 'Train'],
            (object)['id' => 6,  'name' => 'Treehouse'],
            (object)['id' => 11, 'name' => 'Villa'],
            (object)['id' => 15, 'name' => 'Yurt'],
            (object)['id' => 33, 'name' => 'Other']
        ]);
    }

    public function languages()
    {
        return response()->json([
            (object)['id' => 1,  'name' => 'English'],
            (object)['id' => 16, 'name' => 'Italiano'],
            (object)['id' => 32, 'name' => 'Русский'],
            (object)['id' => 2,  'name' => 'Bahasa Indonesia'],
            (object)['id' => 3,  'name' => 'Bahasa Malaysia'],
            (object)['id' => 4,  'name' => 'Bengali'],
            (object)['id' => 5,  'name' => 'Dansk'],
            (object)['id' => 6,  'name' => 'Deutsch'],
            (object)['id' => 7,  'name' => 'Hindi'],
            (object)['id' => 8,  'name' => 'Magyar'],
            (object)['id' => 9,  'name' => 'Nederlands'],
            (object)['id' => 10, 'name' => 'Norsk'],
            (object)['id' => 11, 'name' => 'Polski'],
            (object)['id' => 12, 'name' => 'Português'],
            (object)['id' => 13, 'name' => 'Punjabi'],
            (object)['id' => 14, 'name' => 'Sign Language'],
            (object)['id' => 15, 'name' => 'Suomi'],
            (object)['id' => 17, 'name' => 'Svenska'],
            (object)['id' => 18, 'name' => 'Čeština'],
            (object)['id' => 19, 'name' => 'עברית']
        ]);
    }
}