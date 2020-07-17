<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Product;

class User extends Authenticatable 
{
    use Notifiable;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /* protected $fillable = [
        'name', 'email', 'password',
    ];*/
    protected $fillable = ['first_name','last_name','ci','namber_phone','status','email','email_verified_at','password'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
