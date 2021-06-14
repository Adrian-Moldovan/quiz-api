<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use App\Models\Question;
use App\Models\Answer;
use App\Http\Requests\QuestionPostRequest;

class QuestionsController extends Controller
{
    /**
     * Display a listing of questions and available answers.
     *
     * @group Questions
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Question::with('answers')->with('user')->get();
    }

    /**
     * Store question and its answers.
     * 
     * @group Questions
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionPostRequest $request)
    {
        $validated = $request->validated();

        $question = Question::create([
            'question' => $validated['question'],
            'user_id' => Auth::user()->id
        ]);

        foreach($validated['answers'] as $answer){
            $answer['question_id'] = $question->id;
            Answer::create($answer);
        }

        $storedData = Question::with('answers')->find($question->id);

        return response()->json(['message' => 'question added', 'question' => $storedData], Response::HTTP_CREATED);
    }

    /**
     * Displays a question.
     * 
     * @group Questions
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the question its answers in storage.
     *
     * @group Questions
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the question its answers from storage.
     *
     * @group Questions
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
