<?php

class Follower extends Eloquent 
{
	public static $timestamps = false;
	public function users(){
		return $this -> has_many_and_belongs_to('User');
	}
}