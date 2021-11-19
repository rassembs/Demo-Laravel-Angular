<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    function getAll()
    {
        $gouvernorat = Pays::all();
        return response()->json($gouvernorat, 200);
    }

    function getAllWithGouvernorats()
    {
        $paysWithGouvernorats = Pays::with('gouvernorats')->get();
        return response()->json($paysWithGouvernorats, 200);
    }

    function getPaysById(Request $request)
    {
        $pays = Pays::find($request->id);
        return response()->json($pays, 200);
    }

    function store(Request $request)
    {
        return Pays::firstOrCreate([
            'reference' => $request->reference_pays,
            'designation' => $request->nom_pays,
            'phone_code' => $request ->phone_code
        ]);
    }
}
