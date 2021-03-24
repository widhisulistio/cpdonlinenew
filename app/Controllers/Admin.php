<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Online CPD'
		];
		return view('admin/v_dasboard', $data);
	}
	public function import()
	{ }
}
