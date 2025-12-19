<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $table = 'resultats';
    protected $primaryKey = 'ID_Resultat';
    public $timestamps = true;

    // CREATE
    public static function createResultat($pointsObtenus, $idQuestion, $idSession)
    {
        $resultat = new self();
        $resultat->Points_Obtenus = $pointsObtenus;
        $resultat->ID_Question = $idQuestion;
        $resultat->ID_Session = $idSession;
        $resultat->save();

        return $resultat;
    }

    // READ ALL
    public static function getAllResultats()
    {
        return self::all();
    }

    // READ ONE
    public static function getResultatById($id)
    {
        return self::find($id);
    }

    // UPDATE
    public static function updateResultat($id, $pointsObtenus = null, $idQuestion = null, $idSession = null)
    {
        $resultat = self::find($id);
        if (!$resultat) {
            return null;
        }

        if ($pointsObtenus !== null) $resultat->Points_Obtenus = $pointsObtenus;
        if ($idQuestion !== null) $resultat->ID_Question = $idQuestion;
        if ($idSession !== null) $resultat->ID_Session = $idSession;

        $resultat->save();
        return $resultat;
    }

    // DELETE
    public static function deleteResultat($id)
    {
        $resultat = self::find($id);
        if (!$resultat) {
            return false;
        }

        return $resultat->delete();
    }
}
