<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey='uid';
    public $timestamps = false;
    public $table='u_user';
}
