<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdresseResource;
use App\Models\Adresse;
use App\Models\Region;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Retrieve all adresse data
     *
     * @return AdresseResource
     */

    function getAll (){
        $adresses = Adresse::with('region', 'region.gouvernorat', 'region.gouvernorat.pays')->get();
        return AdresseResource::collection($adresses);
    }

    /**
     * Save adress
     *
     * @param Request $request = [
     *                      'region_id',
     *                      'adresse',
     *                      'code_postal'
     *                ];
     * @return Model
     */
    function store (Request $request){
        $region = Region::find($request->region_id);

        $adresse = new Adresse();
        $adresse->adresse = $request->adresse;
        $adresse->code_postal = $request->code_postal;
        $adresse->region()->associate($region);
        $adresse->save();

        return $adresse;
    }
}
