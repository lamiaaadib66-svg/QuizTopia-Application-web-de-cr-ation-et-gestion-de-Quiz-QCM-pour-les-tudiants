<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // CREATE
    public function create(Request $request)
    {
        Question::createQuestion(
            $request->Num_Ordre,
            $request->Point_Question,
            $request->Enonce_Question,
            $request->ID_Quiz
        );

        return response()->json(['message' => 'Question created']);
    }

    // READ ALL
    public function index()
    {
        $questions = Question::getAll();
        return response()->json($questions);
    }

    // READ ONE 
    public function show($id)
    {
        $question = Question::getById($id);
        if (!$question) {
            return response()->json(['message' => 'Not found'], 404);
        }
        return response()->json($question);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $question = Question::updateQuestion(
            $id,
            $request->Num_Ordre,
            $request->Point_Question,
            $request->Enonce_Question
        );

        if (!$question) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json(['message' => 'Question updated']);
    }

    // DELETE
    public function delete($id)
    {
        $deleted = Question::deleteQuestion($id);
        if (!$deleted) {
            return response()->json(['message' => 'Not found'], 404);
        }
        return response()->json(['message' => 'Question deleted']);
    }
}
