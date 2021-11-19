<?php

namespace App\Http\Controllers;

use App\Models\Gouvernorat;
use App\Models\Region;
use Illuminate\Http\Request;


class RegionController extends Controller
{
    /**
     * Retrieve all regions
     *
     * @return json
     */

    function getAll()
    {
        $regions = Region::all();
        return response()->json($regions, 200);
    }

    /**
     * Retrieve all regions with adresses relationship
     *
     * @return json
     */

    function getAllWithAdresses()
    {
        $regionsWithAdresses = Region::with('adresses')->get();
        return response()->json($regionsWithAdresses, 200);
    }

    /**
     * Retrieve region by id
     *
     * @param Request $request['region_id']
     *
     * @return json
     */

    function getRegionById(Request $request)
    {
        $region = Region::find($request->region_id);
        return response()->json($region, 200);
    }

    /**
     * Save region
     *
     * @param Request $request = ['gouvernorat_id'| store
     *                     'code_region',
     *                     'nom_region'
     *                ];
     * @return Model
     */

    function store(Request $request)
    {
        $gouvernorat = Gouvernorat::find($request->gouvernorat_id);

        if (!$gouvernorat){
            $gouvernoratController = new GouvernoratController();
            $gouvernorat = $gouvernoratController->store($request);
        }

        $region = new Region();
        $region->reference = $request->code_region;
        $region->designation = $request->nom_region;
        $region->gouvernorat()->associate($gouvernorat);
        $region->save();

        return $region;
    }
}
