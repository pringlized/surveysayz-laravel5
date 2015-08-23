<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "issue";
    
    /**
     * Get the questions for this model
     */
    public function questions()
    {
        return $this->hasMany('\App\QuestionModel', 'issue_id');
    }
    
    /**
     * Get the questions for this model
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}