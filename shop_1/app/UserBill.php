<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBill extends Model
{
    //
	protected $table = "user_bill";

	public function user(){
		return $this->belongsToMany('App\User','id_user','id');
	}
	public function bill(){
		return $this->belongsToMany('App\User','id_bill','id');
	}
}
