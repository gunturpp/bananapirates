<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventproject extends Model
{
    protected $table = 'event_projects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'pictures',
        'fk_userid',
        'link_registration'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
