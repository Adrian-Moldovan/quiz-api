<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

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
        return Question::with('answers')->get();
    }

    /**
     * Store question and its answers.
     * 
     * @group Questions
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
