<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;

class Members extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;

    protected $guard = "members";
    protected $fillable = [
        'firstname', 'lastname', 'nickname', 'email', 'password', 'status', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function statusInfo() {
        return $this->belongsTo('App\Status', 'status');
    }

}
