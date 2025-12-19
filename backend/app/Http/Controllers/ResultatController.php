<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    // GET all resultats
    public function index()
    {
        return response()->json(Resultat::getAllResultats());
    }

    // GET single resultat
    public function show($id)
    {
        $resultat = Resultat::getResultatById($id);
        if (!$resultat) {
            return response()->json(['message' => 'Resultat not found'], 404);
        }
        return response()->json($resultat);
    }

    // CREATE a resultat
    public function store(Request $request)
    {
        $request->validate([
            'Points_Obtenus' => 'required|integer',
            'ID_Question' => 'required|integer',
            'ID_Session' => 'required|integer',
        ]);

        $resultat = Resultat::createResultat(
            $request->Points_Obtenus,
            $request->ID_Question,
            $request->ID_Session
        );

        return response()->json($resultat, 201);
    }

    // UPDATE a resultat
    public function update(Request $request, $id)
    {
        $resultat = Resultat::updateResultat(
            $id,
            $request->Points_Obtenus ?? null,
            $request->ID_Question ?? null,
            $request->ID_Session ?? null
        );

        if (!$resultat) {
            return response()->json(['message' => 'Resultat not found'], 404);
        }

        return response()->json($resultat);
    }

    // DELETE a resultat
    public function destroy($id)
    {
        if (!Resultat::deleteResultat($id)) {
            return response()->json(['message' => 'Resultat not found'], 404);
        }

        return response()->json(['message' => 'Resultat deleted successfully']);
    }
}
