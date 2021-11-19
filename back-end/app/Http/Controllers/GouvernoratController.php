<?php

namespace App\Http\Controllers;

use App\Models\Gouvernorat;
use App\Models\Pays;
use Illuminate\Http\Request;

class GouvernoratController extends Controller
{
    function getAll()
    {
        $gouvernorat = Gouvernorat::all();
        return response()->json($gouvernorat, 200);
    }

    function getAllWithRegions()
    {
        $gouvernoratsWithRegions = Gouvernorat::with('regions')->get();
        return response()->json($gouvernoratsWithRegions, 200);
    }

    function getGouvernoratById(Request $request)
    {
        $gouvernorat = Gouvernorat::find($request->id);
        return response()->json($gouvernorat, 200);
    }

    function store(Request $request)
    {
        $pays= Pays::find($request->pays_id);

        if (!$pays){
            $paysController = new PaysController();
            $pays = $paysController->store($request);
        }

        $gouvernorat = new Gouvernorat();
        $gouvernorat->reference = $request->reference_gouv;
        $gouvernorat->designation = $request->nom_gouv;
        $gouvernorat->pays()->associate($pays);
        $gouvernorat->save();

        return $gouvernorat;
    }
}
