<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    /**
     * Get the issues created for this user
     */
    public function issues()
    {
        return $this->hasMany('\App\IssueModel', 'created_by_id', 'id');
    }
    
    /**
     * Get the issues this user has responded to
     */
    public function responses()
    {
        return $this->hasMany('\App\ResponseModel', 'user_id');
    }
    
    /**
     * Get the activities for this user
     */
    public function activities()
    {
        return $this->hasMany('\App\ActivityModel', 'user_id');
    }
    
    /**
     * Get the favorites for this user
     */
    public function favorites()
    {
        return $this->hasMany('\App\FavoriteModel', 'user_id');
    }    
    
    /**
     * Get the activities for this user
     */
    public function doLaters()
    {
        return $this->hasMany('\App\DoLaterModel', 'user_id');
    }    
}
