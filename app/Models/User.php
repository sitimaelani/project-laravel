<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Kritik;
use App\Models\Profile;
use App\Models\Role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     /**   The attributes that should be cast.
    *
    * @var array<int, string>
    */
     
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_id',
        'role_id'
    ];

    
     /**   The attributes that should be cast.
    *
    * @var array<int, string>
    */
     
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    /**   The attributes that should be cast.
    *
    * @var array<string, string>
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function kritik()
        {
            return $this->hasMany(Kritik::class);
        }

    public function profile()
        {
            return $this->hasOne(Profile::class, 'id', 'profile_id');
        }
    
    public function role()
        {
            return $this->hasOne(Profile::class, 'id', 'role_id');
        }
}
