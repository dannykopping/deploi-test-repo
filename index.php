<?php
	use Slim\Slim;
	use ActiveRecord\Config;

	/**
	 *
	 */

	require "vendor/autoload.php";
	require "vendor/php-activerecord/php-activerecord/ActiveRecord.php";

	$s = new Slim();
	$s->get("/hi", function ()
	{
		init();
	});

	function init()
	{
		Config::initialize(function($cfg)
		{
		    $cfg->set_model_directory('models');
		    $cfg->set_connections(array(
//		        'development' => 'mysql://deploi:deploi@localhost/deploi-test'));
		        'development' => 'mysql://deploi:deploi@172.16.64.147/deploi-test'));
		});

		$u = User::create(array("firstName" => "Danny", "email" => "danny".mt_rand(100,999)."@ria-coder.com"));
		$d = Device::create(array("name" => "iPod", "userId" => $u->id));
		$c1 = Comment::create(array("message" => "My message ".mt_rand(100,999), "userId" => $u->id));
		$c2 = Comment::create(array("message" => "My message ".mt_rand(100,999), "userId" => $u->id));
		$c3 = Comment::create(array("message" => "My message ".mt_rand(100,999), "userId" => $u->id));
		$c4 = Comment::create(array("message" => "My message ".mt_rand(100,999), "userId" => $u->id));
		DeviceComment::create(array("deviceId" => $d->id, "commentId" => $c1->id));
		DeviceComment::create(array("deviceId" => $d->id, "commentId" => $c2->id));
		DeviceComment::create(array("deviceId" => $d->id, "commentId" => $c3->id));
		DeviceComment::create(array("deviceId" => $d->id, "commentId" => $c4->id));
	}

//	$s->run();
	init();