<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AcceptAnswerController extends Controller
{
    public function __invoke(Answer $answer)
    {
<<<<<<< HEAD
        $this->authorize('accept',$answer);
       $answer->question->acceptBestAnswer($answer); 
=======
       $this->authorize('accept',$answer);
       $answer->question->acceptBestAnswer($answer);
>>>>>>> lesson-20
       return back();
    }
}
