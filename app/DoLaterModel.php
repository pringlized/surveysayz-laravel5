<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoLaterModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'do_later_index';
    
    /**
     * Belongs to a user
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
