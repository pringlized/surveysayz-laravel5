<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "answer";
    
    /**
     * The parent model
     */
    public function question()
    {
        return $this->belongsTo('\App\QuestionModel');
    }
}
