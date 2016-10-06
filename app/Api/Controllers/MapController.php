<?php

namespace App\Api\Controllers;

use App\Http\Requests;
use App\Helpers\StringHelper;
use Illuminate\Http\Request;

/**
 * Class HelpController
 * @package App\Api\Controllers
 */
class MapController extends Controller
{
    /**
     * Search places
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function places(Request $request)
    {
        $places = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input=' . $request->input('query', '') . '&types=geocode&key=' . env('GOOGLE_MAPS_API'));

        try {
            $places = json_decode($places)->predictions;
            for ($i = 0, $size = sizeof($places); $i < $size; $i++) {
                $places[$i]->url = StringHelper::terms2url($places[$i]->terms);
            }
            return response()->json($places);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }
}