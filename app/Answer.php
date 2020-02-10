<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
<<<<<<< HEAD
    protected $fillable = ['body', 'user_id'];
    
=======

    protected $fillable = ['body','user_id'];

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getBodyHtmlAttribute()
    {
        return \Parsedown::instance()->text($this->body);
    }
    
    public static function boot()
    {
<<<<<<< HEAD
        parent::boot();

        static::created(function ($answer) {
            $answer->question->increment('answers_count');                     
        });        

        static::deleted(function ($answer) {            
            $answer->question->decrement('answers_count');            
        });
=======
       parent::boot();
       static::created(function($answer)
       {
          $answer->question->increment('answers_count');
          $answer->question->save();
       });

       static::deleted(function($answer)
       {
          $answer->question->decrement('answers_count');
       });


>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute()
    {
<<<<<<< HEAD
        return $this->isBest() ? 'vote-accepted' : '';
    }

    public function getIsBestAttribute()
    {
        return $this->isBest();
    }

    public function isBest()
    {
        return $this->id === $this->question->best_answer_id;;
    }
=======
        return $this->id == $this->question->best_answer_id ? 'vote-accepted' : '';
    }

>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62

}
