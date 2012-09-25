<?php
	use ActiveRecord\Model;

	/**
	 *
	 */
	class User extends Model
	{
		static $table_name = "User";

		static $has_many = array(array("devices", "class_name" => "Device", "foreign_key" => "userId"));
	}
