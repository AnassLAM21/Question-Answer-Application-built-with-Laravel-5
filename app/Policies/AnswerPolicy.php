<?php

namespace App\Policies;

use App\User;
use App\Answer;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnswerPolicy
{
<<<<<<< HEAD
    use HandlesAuthorization;    
=======
    use HandlesAuthorization;

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62

    /**
     * Determine whether the user can update the answer.
     *
     * @param  \App\User  $user
     * @param  \App\Answer  $answer
     * @return mixed
     */
    public function update(User $user, Answer $answer)
    {
<<<<<<< HEAD
        return $user->id === $answer->user_id;
    }

    public function accept(User $user, Answer $answer)
    {
        return $user->id === $answer->question->user_id;
    }

    /**
     * Determine whether the user can delete the answer.
=======
        return $user->id == $answer->user_id;
    }

    public function accept(User $user, Answer $answer)
    {
        return $user->id == $answer->question->user_id;
    }

    /**
     * Determine whether the user can delete the answer.
     *
     * @param  \App\User  $user
     * @param  \App\Answer  $answer
     * @return mixed
     */
    public function delete(User $user, Answer $answer)
    {
        return $user->id == $answer->user_id;
    }

    /**
     * Determine whether the user can restore the answer.
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
     *
     * @param  \App\User  $user
     * @param  \App\Answer  $answer
     * @return mixed
     */
<<<<<<< HEAD
    public function delete(User $user, Answer $answer)
    {
        return $user->id === $answer->user_id;
=======
    public function restore(User $user, Answer $answer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the answer.
     *
     * @param  \App\User  $user
     * @param  \App\Answer  $answer
     * @return mixed
     */
    public function forceDelete(User $user, Answer $answer)
    {
        //
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    }
}
