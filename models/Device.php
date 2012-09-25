<?php
	use ActiveRecord\Model;

	/**
	 *
	 */
	class Device extends Model
	{
		static $table_name = "Device";

		static $belongs_to = array(array("user", "class_name" => "User", "foreign_key" => "userId"));
		static $has_many = array(array("comments", "class_name" => "DeviceComment", "foreign_key" => "deviceId"));
	}
