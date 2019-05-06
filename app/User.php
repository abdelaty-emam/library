<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

/**
* User-Book rlation
**/
        public function books(){

        return $this->hasMany('\App\Book');


    }
    /**
    User-comments relation
    **/
     public function comments(){

        return $this->hasMany('\App\Comment');


    }
    
/**User-Roles
**/
    public function roles(){

        return $this->belongsToMany('\App\Role','roles_users','user_id','role_id');


    }

  /** 
  Roles check
  **/
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                    if($this->hasRole($roles)){
                        return true;
                    }
            
            }


        }
        else{
              if ($this->hasRole($roles)){
                return true;
            }

        }

return false;
    }

       public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }


}
