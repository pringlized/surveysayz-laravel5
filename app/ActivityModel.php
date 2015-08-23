<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity';
    
    /**
     * Belongs to a user
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
