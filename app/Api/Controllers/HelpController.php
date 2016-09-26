<?php

namespace App\Api\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HelpController
 * @package App\Api\Controllers
 */
class HelpController extends Controller
{
    /**
     * Search questions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search()
    {
        return response()->json(
            [
                [ 'name' => "Can I change a reservation as a host?", 'url' => "/help/article/50/can-i-change-a-reservation-as-a-host" ],
                [ 'name' => "How is the price determined for my reservation?", 'url' => "/help/article/125/how-is-the-price-determined-for-my-reservation" ],
                [ 'name' => "What is Verified ID?", 'url' => "/help/article/450/what-is-verified-id" ],
                [ 'name' => "What is the Airbnb cancellation policy?", 'url' => "/help/article/149/what-is-the-airbnb-cancellation-policy" ],
                [ 'name' => "How does Airbnb handle security deposits?", 'url' => "/help/article/140/how-does-airbnb-handle-security-deposits" ],
                [ 'name' => "Preparing to travel", 'url' => "/help/article/695" ],
                [ 'name' => "Changing or canceling a reservation", 'url' => "/help/topic/232" ],
                [ 'name' => "Reporting a problem", 'url' => "/help/topic/260" ],
                [ 'name' => "Payments & getting paid", 'url' => "/help/article/51" ],
                [ 'name' => "Reviews", 'url' => "/help/article/13" ],
                [ 'name' => "Editing your profile", 'url' => "/help/topic/196" ],
                [ 'name' => "Booking a reservation", 'url' => "/help/article/380" ],
                [ 'name' => "Preapprovals & special offers", 'url' => "/help/topic/200" ]
            ]
        );
    }

    /**
     * List of categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories()
    {
        return response()->json(
            [
                [ 'name' => 'Getting started', 'subcategories' => [
                    [ 'name' => 'How it works', 'url' => '/help/getting-started/how-it-works' ],
                    [ 'name' => 'How to travel', 'url' => '/help/getting-started/how-to-travel' ],
                    [ 'name' => 'How to host', 'url' => '/help/getting-started/how-to-host' ]
                    ]
                ],
                [ 'name' => 'Account & profile', 'subcategories' => [
                    [ 'name' => 'Signing up', 'url' => '/help/topic/213/signing-up' ],
                    [ 'name' => 'Managing your profile', 'url' => '#', 'subcategories' => [
                        [ 'name' => 'Your profile', 'url' => '/help/topic/196/your-profile' ],
                        [ 'name' => 'Verifications', 'url' => '/help/topic/201/verifications' ],
                        [ 'name' => 'Superhosts', 'url' => '/help/topic/271/superhosts' ],
                        [ 'name' => 'References & referrals', 'url' => '/help/topic/202/references---referrals' ],
                        ]
                    ],
                    [ 'name' => 'Security & password', 'url' => '/help/topic/219/security---password' ],
                    [ 'name' => 'Notifications', 'url' => '/help/topic/230/notifications' ],
                    [ 'name' => 'Referrals', 'url' => '/help/topic/240/referrals' ],
                    [ 'name' => 'Troubleshooting', 'url' => '/help/topic/241/troubleshooting' ]
                ]
                ],
                [ 'name' => 'Hosting', 'subcategories' => [
                    [ 'name' => 'Deciding to host', 'url' => '/help/topic/197/deciding-to-host' ],
                    [ 'name' => 'Your listings', 'url' => '#' ],
                    [ 'name' => 'Your reservations', 'url' => '#' ],
                    [ 'name' => 'Getting paid', 'url' => '#' ],
                    [ 'name' => 'Additional hosts', 'url' => '/help/topic/377/additional-hosts' ],
                    [ 'name' => 'Hosting standards', 'url' => '/help/topic/206/hosting-standards' ],
                    [ 'name' => 'Community Center', 'url' => '/help/topic/374/community-center' ]
                ] ],
                [ 'name' => 'Traveling', 'subcategories' => [
                    [ 'name' => 'Finding a place', 'url' => '/help/topic/191/finding-a-place' ],
                    [ 'name' => 'Booking a place', 'url' => '#' ],
                    [ 'name' => 'Paying', 'url' => '#' ],
                    [ 'name' => 'Your trip', 'url' => '#' ],
                ] ],
                [ 'name' => 'Reviews', 'url' => '/help/topic/203/reviews' ],
                [ 'name' => 'Business travel', 'subcategories' => [
                  [ 'name' => 'Travelers', 'url' => '/help/topic/371/travelers' ],
                  [ 'name' => 'Hosts', 'url' => '/help/topic/372/hosts' ],
                  [ 'name' => 'Travel managers', 'url' => '/help/topic/369/travel-managers' ]
                ] ],
                [ 'name' => 'Trust & safety', 'subcategories' => [
                  [ 'name' => 'Hosts', 'url' => '#' ],
                  [ 'name' => 'Guests', 'url' => '/help/topic/245/guests' ],
                  [ 'name' => 'Online security', 'url' => '#' ]
                ] ],
                [ 'name' => 'Taxes', 'subcategories' => [
                  [ 'name' => 'How taxes work', 'url' => '/help/topic/247/how-taxes-work' ],
                  [ 'name' => 'Local tax', 'url' => '/help/topic/264/local-tax' ],
                  [ 'name' => 'US federal tax', 'url' => '/help/topic/248/us-federal-tax' ],
                  [ 'name' => 'Value added tax', 'url' => '/help/topic/249/value-added-tax' ]
                ] ],
                [ 'name' => 'Community', 'subcategories' => [
                  [ 'name' => 'Community Center', 'url' => '/help/topic/376/community-center' ],
                  [ 'name' => 'Airbnb Open', 'url' => '/help/topic/396/airbnb-open' ],
                  [ 'name' => 'Meetups', 'url' => '/help/topic/256/meetups' ],
                  [ 'name' => 'Neighbors', 'url' => '/help/topic/265/neighbors' ]
                ] ],
                [ 'name' => 'Policies', 'subcategories' => [
                  [ 'name' => 'Terms & policies', 'url' => '/help/topic/250/terms---policies' ],
                  [ 'name' => 'Governments & law enforcement', 'url' => '/help/topic/262/governments---law-enforcement' ],
                  [ 'name' => 'Responsible Disclosure', 'url' => '/help/topic/252/responsible-disclosure' ],
                  [ 'name' => 'Nondiscrimination', 'url' => '/help/topic/533/nondiscrimination' ]
                ] ],
                [ 'name' => 'Resolve issue', 'url' => '/help/contact_us' ],
            ]
        );
    }

    /**
     * @brief Suggested questions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function suggested()
    {
        return response()->json(
            [
                [ 'name' => 'Can I change a reservation as a host?', 'url' => '/help/article/50/can-i-change-a-reservation-as-a-host' ],
                [ 'name' => 'How is the price determined for my reservation?', 'url' => '/help/article/125/how-is-the-price-determined-for-my-reservation' ],
                [ 'name' => 'What is Verified ID?', 'url' => '/help/article/450/what-is-verified-id' ],
                [ 'name' => 'What is the Airbnb cancellation policy?', 'url' => '/help/article/149/what-is-the-airbnb-cancellation-policy' ],
                [ 'name' => 'How does Airbnb handle security deposits?', 'url' => '/help/article/140/how-does-airbnb-handle-security-deposits' ]
            ]
        );
    }

    /**
     * Popular questions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function popular()
    {
        return response()->json(
            [
                [ 'icon' => 'paper-plane', 'name' => 'Preparing to travel', 'url' => '/help/article/695' ],
                [ 'icon' => 'edit', 'name' => 'Changing or canceling a reservation', 'url' => '/help/topic/232' ],
                [ 'icon' => 'flag', 'name' => 'Reporting a problem', 'url' => '/help/topic/260' ],
                [ 'icon' => 'money-deposit', 'name' => 'Payments & getting paid', 'url' => '/help/article/51' ],
                [ 'icon' => 'comment', 'name' => 'Reviews', 'url' => '/help/article/13' ],
                [ 'icon' => 'edit', 'name' => 'Editing your profile', 'url' => '/help/topic/196' ],
                [ 'icon' => 'credit-card', 'name' => 'Booking a reservation', 'url' => '/help/article/380"' ],
                [ 'icon' => 'star-alt', 'name' => 'Preapprovals & special offers', 'url' => '/help/topic/200' ]
            ]
        );
    }

    /**
     * Get question details
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        return response()->json(
            [
                'id' => 318,
                'name' => 'How do taxes work for guests?',
                'url' => '/help/article/318/how-do-taxes-work-for-guests',
                'description' => '
                    <p>There are a few instances where an Airbnb guest may need to pay tax.</p>
                    <p>Some hosts are required by their local regulations to charge a tax. We recommend they include the tax in the price of the reservation, but some may require the tax to be paid directly upon check-in. We ask that hosts explain any taxes they may be required to collect in their listing description and their communication with guests prior to booking.</p>
                    <p>In some locations, Airbnb has made agreements with government officials to collect and remit certain local taxes on behalf of hosts. The taxes vary and, depending on the local law, may include calculations based on a flat rate or percentage rate, the number of guests, number of nights, or property type booked. When you book a listing in one of these locations, the local taxes collected will be displayed automatically when you pay and appear on your receipt once your reservation is confirmed.</p>
                    <p>Additionally, Airbnb is required to collect VAT or a VAT equivalent (i.e. Japanese Consumption Tax) on its service fees in countries that tax Electronically Supplied Services. Currently, that includes all countries in the EU, Switzerland, Norway, Iceland, South Africa, and Japan. <a href="https://www.airbnb.com/help/topic/159">Learn more about Value Added Tax.</a></p>'
            ]
        );
    }
}