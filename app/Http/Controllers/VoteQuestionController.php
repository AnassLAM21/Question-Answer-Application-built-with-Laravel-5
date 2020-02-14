<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use Illuminate\Support\Facades\DB;

class VoteQuestionController extends Controller
{
    public function __cunstruct(){
        $this->middlware('auth');
    }

    public function __invoke(Question $question)
    {
        $vote = (int) request()->vote;

        $votesCount = User::find(auth()->user()->id)->voteQuestion($question, $vote);

        if (request()->expectsJson()) {
            return response()->json([
                'message' => 'Thanks for the feedback',
                'votesCount' => $votesCount
            ]);
        }

        return back();
    }

}