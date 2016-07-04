<?php 

class Client extends BaseModel 
{
	protected $table = "clients";

	public static $rules = array(
    'firstName'      => 'required|max:100',
    'lastName'       => 'required|max:10000',
    'medicareNumber' => 'max:1000'
	);

}