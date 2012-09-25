<?php
	use ActiveRecord\Model;

	/**
	 *
	 */
	class Comment extends Model
	{
		static $table_name = "Comment";

		static $belongs_to = array(array("user", "class_name" => "User", "foreign_key" => "userId"));
	}
