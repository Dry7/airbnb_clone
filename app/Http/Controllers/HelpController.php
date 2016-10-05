<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Help API
 *
 * @package App\Http\Controllers
 */
class HelpController extends Controller
{
    /**
     * List of help categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories()
    {
        return response()->json([
            ['name' => 'Getting started', 'subcategories' => [
                ['name' => 'How it works', 'url' => '/help/getting-started/how-it-works'],
                ['name' => 'How to travel', 'url' => '/help/getting-started/how-to-travel'],
                ['name' => 'How to host', 'url' => '/help/getting-started/how-to-host']
            ]],
            ['name' => 'Account & profile', 'subcategories' => [
                ['name' => 'Signing up', 'url' => '/help/topic/213/signing-up'],
                ['name' => 'Managing your profile', 'subcategories' => [
                    ['name' => 'Your profile', 'url' => '/help/topic/196/your-profile'],
                    ['name' => 'Verifications', 'url' => '/help/topic/201/verifications'],
                    ['name' => 'Superhosts', 'url' => '/help/topic/271/superhosts'],
                    ['name' => 'References & referrals', 'url' => '/help/topic/202/references---referrals']
                ]],
                ['name' => 'Security & password', 'url' => '/help/topic/219/security---password'],
                ['name' => 'Notifications', 'url' => '/help/topic/230/notifications'],
                ['name' => 'Referrals', 'url' => '/help/topic/240/referrals'],
                ['name' => 'Troubleshooting', 'url' => '/help/topic/241/troubleshooting']
            ]],
            ['name' => 'Hosting', 'subcategories' => [
                ['name' => 'Deciding to host', 'url' => '/help/topic/197/deciding-to-host'],
                ['name' => 'Your listings', 'subcategories' => [
                    ['name' => 'Listing your place', 'url' => '/help/topic/207/listing-your-place'],
                    ['name' => 'Photos', 'url' => '/help/topic/208/photos'],
                    ['name' => 'Amenities   ', 'url' => '/help/topic/210/amenities'],
                    ['name' => 'Calendar & availability', 'url' => '/help/topic/211/calendar---availability'],
                    ['name' => 'Pricing', 'url' => '/help/topic/212/pricing'],
                    ['name' => 'Instant Book', 'url' => '/help/topic/214/instant-book'],
                    ['name' => 'Search results', 'url' => '/help/topic/217/search-results'],
                    ['name' => 'Host Assist apps', 'url' => '/help/topic/373/host-assist-apps']
                ]],
                ['name' => 'Your reservations', 'subcategories' => [
                    ['name' => 'Messaging & communication', 'url' => '/help/topic/221/messaging---communication'],
                    ['name' => 'Accepting a reservation', 'url' => '/help/topic/223/accepting-a-reservation'],
                    ['name' => 'Security deposits', 'url' => '/help/topic/224/security-deposits'],
                    ['name' => 'Changes & cancellations', 'url' => '/help/topic/232/changes---cancellations'],
                    ['name' => 'Disputes & resolutions', 'url' => '/help/topic/233/disputes---resolutions']
                ]],
                ['name' => 'Getting paid', 'subcategories' => [
                    ['name' => 'How payouts work', 'url' => '/help/topic/234/how-payouts-work'],
                    ['name' => 'Payout preferences', 'url' => '/help/topic/235/payout-preferences'],
                    ['name' => 'Payout services', 'url' => '/help/topic/236/payout-services'],
                    ['name' => 'Refunds', 'url' => '/help/topic/237/refunds']
                ]],
                ['name' => 'Additional hosts', 'url' => '/help/topic/377/additional-hosts'],
                ['name' => 'Hosting standards', 'url' => '/help/topic/206/hosting-standards'],
                ['name' => 'Community Center', 'url' => '/help/topic/374/community-center']
            ]],
            ['name' => 'Traveling', 'subcategories' => [
                ['name' => 'Finding a place', 'url' => '/help/topic/191/finding-a-place'],
                ['name' => 'Booking a place', 'subcategories' => [
                    ['name' => 'Contacting hosts', 'url' => '/help/topic/195/contacting-hosts'],
                    ['name' => 'Instant Book', 'url' => '/help/topic/198/instant-book'],
                    ['name' => 'Pre-approvals and Special Offers', 'url' => '/help/topic/200/pre-approvals-and-special-offers'],
                    ['name' => 'Reservation requests', 'url' => '/help/topic/216/reservation-requests']
                ]],
                ['name' => 'Paying', 'subcategories' => [
                    ['name' => 'Prices & fees', 'url' => '/help/topic/220/prices---fees'],
                    ['name' => 'Payment methods', 'url' => '/help/topic/222/payment-methods'],
                    ['name' => 'Coupons & credits', 'url' => '/help/topic/225/coupons---credits'],
                    ['name' => 'Security deposits', 'url' => '/help/topic/226/security-deposits']
                ]],
                ['name' => 'Your trip', 'subcategories' => [
                    ['name' => 'Preparing for your trip', 'url' => '/help/topic/229/preparing-for-your-trip'],
                    ['name' => 'During your trip', 'url' => '/help/topic/231/during-your-trip'],
                    ['name' => 'Change of plans', 'url' => '/help/topic/259/change-of-plans'],
                    ['name' => 'Resolving a problem', 'url' => '/help/topic/260/resolving-a-problem']
                ]]
            ]],
            ['name' => 'Reviews', 'url' => '/help/topic/203/reviews'],
            ['name' => 'Business travel', 'subcategories' => [
                ['name' => 'Travelers', 'url' => '/help/topic/371/travelers'],
                ['name' => 'Hosts', 'url' => '/help/topic/372/hosts'],
                ['name' => 'Travel managers', 'url' => '/help/topic/369/travel-managers']
            ]],
            ['name' => 'Trust & safety', 'subcategories' => [
                ['name' => 'Hosts', 'subcategories' => [
                    ['name' => 'Host Guarantee & Host Protection Insurance', 'url' => '/help/topic/358/host-guarantee---host-protection-insurance'],
                    ['name' => 'Home safety', 'url' => '/help/topic/359/home-safety'],
                    ['name' => 'Guest safety', 'url' => '/help/topic/360/guest-safety']
                ]],
                ['name' => 'Guests', 'url' => '/help/topic/245/guests'],
                ['name' => 'Online security', 'subcategories' => [
                    ['name' => 'Payment & communication', 'url' => '/help/topic/355/payment---communication'],
                    ['name' => 'Verification', 'url' => '/help/topic/356/verification'],
                    ['name' => 'Security resources', 'url' => '/help/topic/357/security-resources']
                ]]
            ]],
            ['name' => 'Taxes', 'subcategories' => [
                ['name' => 'How taxes work', 'url' => '/help/topic/247/how-taxes-work'],
                ['name' => 'Local tax', 'url' => '/help/topic/264/local-tax'],
                ['name' => 'US federal tax', 'url' => '/help/topic/248/us-federal-tax'],
                ['name' => 'Value added tax', 'url' => '/help/topic/249/value-added-tax']
            ]],
            ['name' => 'Community', 'subcategories' => [
                ['name' => 'Community Center', 'url' => '/help/topic/376/community-center'],
                ['name' => 'Airbnb Open', 'url' => '/help/topic/396/airbnb-open'],
                ['name' => 'Meetups', 'url' => '/help/topic/256/meetups'],
                ['name' => 'Neighbors', 'url' => '/help/topic/265/neighbors']
            ]],
            ['name' => 'Policies', 'subcategories' => [
                ['name' => 'Terms & policies', 'url' => '/help/topic/250/terms---policies'],
                ['name' => 'Governments & law enforcement', 'url' => '/help/topic/262/governments---law-enforcement'],
                ['name' => 'Responsible Disclosure', 'url' => '/help/topic/252/responsible-disclosure'],
                ['name' => 'Nondiscrimination', 'url' => '/help/topic/533/nondiscrimination']
            ]],
            ['name' => 'Feedback', 'url' => '/help/feedback', 'subcategories' => []],
            ['name' => 'Resolve issue', 'url' => '/help/feedback', 'subcategories' => []],
        ]);
    }

    /**
     * Lise of suggested articles
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function suggested()
    {
        return response()->json([
            ['id' => 125, 'name' => 'How is the price determined for my reservation?', 'url' => '/help/article/125/how-is-the-price-determined-for-my-reservation'],
            ['id' => 450, 'name' => 'What is Verified ID?', 'url' => '/help/article/450/what-is-verified-id'],
            ['id' => 13, 'name' => 'How do reviews work?', 'url' => '/help/article/13/how-do-reviews-work'],
            ['id' => 297, 'name' => 'Where can I learn more about Airbnb\'s professional photography service?', 'url' => '/help/article/297/where-can-i-learn-more-about-airbnb-s-professional-photography-service'],
            ['id' => 169, 'name' => 'I’m a guest. How do I cancel my reservation?', 'url' => '/help/article/169/cancel-a-reservation-as-a-guest']
        ]);
    }
}