<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Option;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at', 'ASC')->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request) 
    {
        $question = new Question;
        $question->name = $request->name;
        $question->save();

        $option = new Option;
        $option->text = $request->option1;
        $option->questions_id = $question->id;
        $option->correct = '0';
        $option->save();

        $option = new Option;
        $option->text = $request->option2;
        $option->questions_id = $question->id;
        $option->correct = '0';
        $option->save();

        $option = new Option;
        $option->text = $request->correctoption;
        $option->questions_id = $question->id;
        $option->correct = '1';
        $option->save();

        return redirect()->route('index');
    }

    // public function update()
    // {
    //     $question = Question::find($id);

    //     $option = Option::find($id);

    //     $question = new Question;
    //     $question->name = $request->name;
    //     $question->save();


    //     //Rework the options method(IMPORTANT!!!!!!!).
    //     $option = new Option;
    //     $option->text = $request->option1;
    //     $option->text = $request->option2;
    //     $option->text = $request->correctoption;
    //     $option->questions_id = $question->id;
    //     $option->correct = '0';
    //     $option->save();

    //     $option = new Option;
    //     $option->text = $request->correctoption;
    //     // $option->questions_id = $question- >id;
    //     $option->correct = '1';
    //     $option->save();

    //     return view('questions.edit', compact('question'));
    // }

    public function destroy($id)
    {
        $options = Option::where('questions_id', $id )->get();
        $question = Question::find($id);

        foreach($options as $option){
            $option->delete();
        }
        $question->delete();

        return redirect('/questions')->with('success', 'Question has been deleted Successfully');
    }

    public function test(Request $request){
        $question = Question::where('id', $request->id)->with('options')->first();
        return response()->json($question);
    }

    public function quizes()
    {   
        $questions = Question::all();
        return view('quiz.index', compact('questions', 'options'));
    }

    public function submit_record(Request $request)
    {
        
    }

    public function store_records(Request $request)
    {
        return view('questions.record');
    }

    public function show_records(Request $request)
    {
        $record = Record::find($id);
        $recrod = Record::where('id', $request->id)->with('questions', 'options');
        return view('questions.record');
    }
}
