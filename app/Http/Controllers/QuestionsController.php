<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
// use App\Options;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id')->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|unique |max:255',
            'option' => 'required'
        ]);

        // $question = new Question::findOrFail($id);
        $question->name = $request->name;
    
    }
}
