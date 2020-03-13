<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\mdl_user as Authenticatable;
use Illuminate\Notifications\Notifiable;

class mdl_user extends Authenticatable
{
  use Notifiable;
  protected $table = 'mdl_user';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'username', 'password',
  ];


}
