<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UserStatus;
use App\UserProfile;
class User extends Authenticatable {

    use HasApiTokens,
        Notifiable,
        HasRoles,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'status_id', 'username', 'email', 'password',
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

    public function user_statuses() {
        return $this->belongsTo(UserStatus::class, 'status_id');
    }

    public function userProfile() {
        return $this->hasOne(UserProfile::class, 'user_id');
    }

    public function posts(){
        return $this->hasMany(App\Post::class);
    }
    
    public function getPostsCountAttribute(){
        return $this->posts()->count();
    }
}
