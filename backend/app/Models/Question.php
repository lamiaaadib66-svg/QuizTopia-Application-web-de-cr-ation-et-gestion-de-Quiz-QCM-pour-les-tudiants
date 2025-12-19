<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'ID_Question';
    public $timestamps = true;

    // CREATE
    public static function add($numOrdre, $points, $enonce, $idQuiz)
    {
        $q = new Question();
        $q->Num_Ordre = $numOrdre;
        $q->Point_Question = $points;
        $q->Enonce_Question = $enonce;
        $q->ID_Quiz = $idQuiz;
        $q->save();

        return $q;
    }

    // READ ALL
    public static function allQuestions()
    {
        return Question::all();
    }
    // READ ONE
    public static function findById($id)
    {
        return Question::find($id);
    }
    // UPDATE
    public static function edit($id, $numOrdre, $points, $enonce)
    {
        $q = Question::find($id);
        if (!$q) return null;

        $q->Num_Ordre = $numOrdre;
        $q->Point_Question = $points;
        $q->Enonce_Question = $enonce;
        $q->save();

        return $q;
    }

    // DELETE
    public static function remove($id)
    {
        $q = Question::find($id);
        if (!$q) return false;

        $q->delete();
        return true;
    }
}
