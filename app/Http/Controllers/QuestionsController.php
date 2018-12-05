<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Option;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at', 'DESC');
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request) 
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique |max:255'
        // ]);

        $question = new Question;
        $question->name = $request->name;
        $question->save();

        $option = new Option;
        $option->text = $request->option1;
        $option->question_id = $question->id;
        $option->correct = '0';
        $option->save();

        $option = new Option;
        $option->text = $request->option2;
        $option->question_id = $question->id;
        $option->correct = '0';
        $option->save();

        $option = new Option;
        $option->text = $request->option3;
        $option->question_id = $question->id;
        $option->correct = '1';
        $option->save();

        return redirect('questions.index');
    
    }
}
