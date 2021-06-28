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
     * Listing the questions and available answers.
     * 
     * @group Questions
     * @queryParam limit integer 
     * @queryParam random boolean
     * @response 200 [
     *  {
     *      "id": 1,
     *      "question": "What is the capital of Chile?",
     *      "author": "Inani Mate",
     *      "answers": [
     *          {
     *          "id": 1,
     *           "text": "Santiago",
     *           "right": "1"
     *          },
     *          {
     *           "id": 2,
     *           "text": "Buenos Aires",
     *           "right": "0"
     *          },
     *          {
     *           "id": 3,
     *           "text": "Bucharest",
     *           "right": "0"
     *          },
     *          {
     *           "id": 4,
     *           "text": "Russia",
     *           "right": "0"
     *          }
     *      ]
     *    },
     *    {
     *      "id": 2,
     *      "question": "What is the smallest country in the world?",
     *      "author": "Inani Mate",
     *      "answers": [
     *          {
     *          "id": 1,
     *           "text": "Vatican City",
     *           "right": "1"
     *          },
     *          {
     *           "id": 2,
     *           "text": "Luxemburg",
     *           "right": "0"
     *          },
     *          {
     *           "id": 3,
     *           "text": "India",
     *           "right": "0"
     *          },
     *          {
     *           "id": 4,
     *           "text": "Liechtenstein",
     *           "right": "0"
     *          }
     *      ]
     *    }
     * ]
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryBuiler = Question::with(['answers']);

        $limit = $request->query('limit');
        if(!is_null($limit) && strlen($limit)){
            if(!is_numeric($limit) || $limit <= 0){
                return response() -> json(['error' => 'Invalid parameter: limit'], Response::HTTP_BAD_REQUEST);
            }
            $queryBuiler->limit($limit);
        }

        $random = $request->query('random');
        if(!is_null($random) && strlen($random)){
            if(!in_array($random, ['true', 'false', 0, 1])){
                return response() -> json(['error' => 'Invalid parameter: random'], Response::HTTP_BAD_REQUEST);
            }
            $queryBuiler->inRandomOrder();
        }

        //
        return $queryBuiler 
                    -> get() 
                    -> map( function($question){
                        $data = $question -> only(['id','question','author']);
                        $data['answers'] = $question -> answers -> map(function($answer){
                            return $answer -> only(['id','text','right']);
                        });
                        return $data;
                    });
    }

    /**
     * List of questions belonging to the authenticated user
     *
     * @group Questions
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function userQuestions()
    {
        //
        return Question::with('answers')->where('user_id', Auth::id())->get();
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
     * @authenticated
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
     * Delete a question its answers.
     * 
     * <aside class="notice">Must be the author of the question in order to be able to delete it.</aside>
     *
     * @group Questions
     * @authenticated
     * @urlParam question integer required The id of the question to be deleted; 
     * 
     * 
     * @param  int  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if($question->user_id !== (string)Auth::id()){
            return response()->json(['message' => 'Resource does not belong to authenticated user'], Response::HTTP_FORBIDDEN);
        }

        $question->deleteQuestion($question->id);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
