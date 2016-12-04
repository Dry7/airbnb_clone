<?php

namespace App\Api\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Api\Controllers
 */
class UserController extends Controller
{
    private $images = [
        'https://a1.muscache.com/im/users/20430215/profile_pic/1408867940/original.jpg?aki_policy=profile_x_medium',
        'https://a2.muscache.com/im/users/40841869/profile_pic/1439145457/original.jpg?aki_policy=profile_x_medium',
        'https://a0.muscache.com/im/pictures/2b51cd36-607e-4aa8-bb9c-9b530479784a.jpg?aki_policy=profile_x_medium',
        'https://a2.muscache.com/im/pictures/9ddd63b1-3c5e-4564-b4e5-ba37ff519c00.jpg?aki_policy=profile_x_medium',
        'https://a0.muscache.com/im/pictures/ca5d4c0c-c348-483e-9423-aa97b7190497.jpg?aki_policy=profile_x_medium',
        'https://a1.muscache.com/im/pictures/123971e3-55e8-4e64-a893-54917559b519.jpg?aki_policy=profile_x_medium'
    ];

    private $names = [
        'Ирина',
        'Ольга',
        'Сергей',
        'Оксана',
        'Anna'
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
            'name' => 'Ирина',
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

    public function details(Request $request, $id)
    {
        return response()->json([
            'id' => $id,
            'name' => $this->names[rand(0, sizeof($this->names)-1)],
            'sex' => ['male', 'female'][rand(0, 1)],
            'birthday' => '1991-07-01',
            'url' => '/users/show/' . $id,
            'image' => $this->images[rand(0, sizeof($this->images)-1)],
            'is_superhost' => (boolean)rand(0, 1),
            'is_suitcase' => (boolean)rand(0, 1),
            'country' => 'New York, New York, United States',
            'created_at' => '2011-11-01',
            'reviews' => rand(0, 100),
            'about' => '<p>I am a fun loving dad who is enjoying all the things life has to offer.  I love to take photos mostly in Queens and Brooklyn. I am on Instragram @ cosmemarley</p><p>There is an Einstein quote:</p><p>“There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.” </p><p>I try to rent out to "everything is a miracle" type people  :)</p>',
            'university' => 'University of Maryland Baltimore County',
            'employer' => 'Industrial Psychologist',
            'verified' => (boolean)rand(0, 1),
            'verified_email' => (boolean)rand(0, 1),
            'verified_phone' => (boolean)rand(0, 1),
            'verified_passport' => (boolean)rand(0, 1),
            'facebook' => (boolean)rand(0, 1),
            'google' => (boolean)rand(0, 1),
            'linkedin' => (boolean)rand(0, 1)
        ]);
    }

    public function reviews(Request $request, $id, $section = 'guests')
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
            'ad' => [
                'name' => '2nd Flr - The Blue Moon Room',
                'url' => '/rooms/9833962'
            ],
            'answer' => [
                null,
                'I\'m so glad - I love for my guests to feel welcome here :-). Don\'t forget about your Harlem family, see you next year!!!',
                'Hi Naama, Thanks for the review! Manhattan is a big island, and while we are at the north end, we are on the island just before the border. Manhattan island is separated from the Bronx by the east river which you can see from the window. The island is broken into many neighborhoods, some of the main attractions that you might be thinking about (e.g., empire state building, times square) are in midtown Manhattan, while others (e.g., liberty island, Chelsea Piers) are accessible from lower Manhattan. See you on your next visit!'
            ][rand(0, 2)],
            'answer_created_at' => '2016-10-10',
            'author' => $this->authors[rand(0, sizeof($this->authors)-1)],
        ];
    }
}