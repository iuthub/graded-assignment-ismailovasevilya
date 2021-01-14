<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['newTask'];

    public function user(){
	return $this->belongsTo('App\User');
}
}

