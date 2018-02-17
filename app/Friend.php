<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
  protected $table = 'friend';
  protected $fillable = ['first_name','last_name','nickname','birthday','address','bank_account','status_noti','status'];
}
