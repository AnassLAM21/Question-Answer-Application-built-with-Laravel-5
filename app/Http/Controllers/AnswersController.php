<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
<<<<<<< HEAD
{    
=======
{
    

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(Question $question, Request $request)
=======
    public function store(Question $question,Request $request)
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    {
        $answer = $question->answers()->create($request->validate([
            'body' => 'required'
        ]) + ['user_id' => \Auth::id()]);

        return back()->with('success', "Your answer has been submitted successfully");
<<<<<<< HEAD
    }    
=======
    }

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit(Question $question, Answer $answer)
    {
        $this->authorize('update', $answer);

        return view('answers.edit', compact('question', 'answer'));
=======
    public function edit(Question $question,Answer $answer)
    {
        $this->authorize('update',$answer);
        return view('answers.edit',compact('question','answer'));
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, Question $question, Answer $answer)
    {
        $this->authorize('update', $answer);

        $answer->update($request->validate([
            'body' => 'required',
        ]));

        return redirect()->route('questions.show', $question->slug)->with('success', 'Your answer has been updated');
=======
    public function update(Request $request,Question $question, Answer $answer)
    {
        $this->authorize('update',$answer);
        $answer->update($request->validate([
            'body' => 'required'
        ]));

        return redirect()->route('questions.show', $question->slug)->with('success', 'Your answer has been updated');

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy(Question $question, Answer $answer)
    {
        $this->authorize('delete', $answer);

        $answer->delete();

        return back()->with('success', "Your answer has been removed");
=======
    public function destroy(Question $question,Answer $answer)
    {
        $this->authorize('delete',$answer);
        $answer->delete();
        return back()->with('success','your answer has been removed with success');
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    }
}
