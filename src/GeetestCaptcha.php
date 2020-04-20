<?php namespace Nelsons\Geetest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

trait GeetestCaptcha
{
	/**
	 * Get geetest.
	 */
	public function getGeetest()
	{
		$data = [
			'user_id' => Request::ip(),
			'client_type' => 'web',
			'ip_address' => Request::ip()
		];
		$status = Geetest::preProcess($data);

		echo Geetest::getResponseStr();
	}
}