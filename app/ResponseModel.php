<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponseModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "response";
    
    /**
     * A parent model
     */
    public function issue()
    {
        return $this->belongsTo('\App\IssueModel');
    }
    
    /**
     * A parent model
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }   
}
