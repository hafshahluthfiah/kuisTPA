<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public $timestamp = false;
    public $primaryKey='id';
    protected $fillable=['question'];
}
