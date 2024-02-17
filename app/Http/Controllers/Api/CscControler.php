<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use App\Models\States;
use App\Models\Regions;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubRegions;

/**
 * @OA\Info(
 *     title="Country State City API",
 *     version="0.1"
 * )
 */
class CscControler extends Controller
{
    public function index()
    {
        $countries = Countries::all();


        $data = [
            "status" => 200,
            "countries" => $countries
        ];
        return response()->json($data, 200);
    }

    /// regions
    /**
     * @OA\Get(
     *     path="/api/regions",
     *     summary="Get all regions",
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     )
     * )
     */
    public function regions()
    {
        $regions = Regions::all();


        if ($regions == null || count($regions) == 0) {
            $data = [
                "status" => 404,
                "message" => "Regions not found"
            ];
            return response()->json($data, 404);
        }
        $data = [
            "status" => 200,
            "regions" => $regions
        ];
        return response()->json($data, 200);
    }

    /// subregions
    /**
     * @OA\Get(
     *     path="/api/subregions",
     *     summary="Get all subregions",
     *     @OA\Parameter(
     *         description="Parameter with mutliple examples",
     *         in="query",
     *         name="regionId",
     *         @OA\Schema(type="integer"),
     *         @OA\Examples(example="int", summary="An int value."),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     )
     * )
     */
    public function subregions(Request $request)
    {
        $regionId = $request->regionId;

        if ($regionId == null) {

            $subRegions = SubRegions::all();
        } else {
            $subRegions = SubRegions::where('region_id', $regionId)->get();
        }

        if ($subRegions == null || count($subRegions) == 0) {
            $data = [
                "status" => 404,
                "message" => "Subregions not found"
            ];
            return response()->json($data, 404);
        }

        $data = [
            "status" => 200,
            "subregions" => $subRegions
        ];
        return response()->json($data, 200);
    }

    /// countries
    /**
     * @OA\Get(
     *     path="/api/countries",
     *     summary="Get all countries",
     *     @OA\Parameter(
     *         description="Parameter with mutliple examples",
     *         in="query",
     *         name="id",
     *         @OA\Schema(type="integer"),
     *         @OA\Examples(example="int", summary="An int value."),
     *         @OA\Examples(example="India", value=101, summary="Id for India"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     )
     * )
     */
    public function countries(Request $request)
    {
        $id = $request->id;
        if ($id == null) {

            $countries = Countries::all();
            $data = [
                "status" => 200,
                "countries" => $countries
            ];
        } else {
            $country = Countries::where('id', $id)->first();

            if ($country == null) {
                $data = [
                    "status" => 404,
                    "message" => "Country not found"
                ];
                return response()->json($data, 404);
            } else {
                $data = [
                    "status" => 200,
                    "country" => $country
                ];
            }
        }

        return response()->json($data, 200);
    }

    /// states
    /**
     * @OA\Get(
     *     path="/api/states/{countryId}",
     *     summary="Get all states",
     *     @OA\Parameter(
     *         description="Parameter with India examples",
     *         in="path",
     *         name="countryId",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         @OA\Examples(example="India", value=101, summary="Id for India"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     )
     * )
     */
    public function states($countryId)
    {
        $states = States::where('country_id', $countryId)->orderBy('name', 'asc')->get();


        if ($states == null || count($states) == 0) {
            $data = [
                "status" => 404,
                "message" => "States not found"
            ];
            return response()->json($data, 404);
        }

        $data = [
            "status" => 200,
            "states" => $states
        ];
        return response()->json($data, 200);
    }

    /// cities
    /**
     * @OA\Get(
     *     path="/api/cities/{stateId}",
     *     summary="Get all states",
     *     @OA\Parameter(
     *         description="Parameter with Maharashtra examples",
     *         in="path",
     *         name="stateId",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         @OA\Examples(example="Maharashtra", value=4008, summary="Id for Maharashtra"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     )
     * )
     */

    public function cities($stateId)
    {
        $cities = City::where('state_id', $stateId)->orderBy('name', 'asc')->get();

        if ($cities == null || count($cities) == 0) {
            $data = [
                "status" => 404,
                "message" => "Cities not found"
            ];
            return response()->json($data, 404);
        }

        $data = [
            "status" => 200,
            "cities" => $cities
        ];
        return response()->json($data, 200);
    }
}
