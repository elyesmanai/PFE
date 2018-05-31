<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','zone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
        return $this->HasMany('App\Project');
    }

    public function appointments()
    {
        return $this->HasMany('App\Appointment')->get();;
    }

    public function feedbacks()
    {
        return $this->HasMany('App\Feedback')->get();;
    }

    public function com_actions()
    {
        return $this->HasMany('App\Communication_action')->get();;
    }

}
