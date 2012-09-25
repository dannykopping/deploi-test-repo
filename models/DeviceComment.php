<?php
	use ActiveRecord\Model;

	/**
	 *
	 */
	class DeviceComment extends Model
	{
		static $table_name = "DeviceComment";

		static $belongs_to = array(
			array("device", "class_name" => "Device", "foreign_key" => "deviceId"),
			array("comment", "class_name" => "Comment", "foreign_key" => "commentId")
		);
	}
