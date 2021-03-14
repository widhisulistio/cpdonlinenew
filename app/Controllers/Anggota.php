<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelanggota;

class Anggota extends BaseController
{
	public function __construct()
	{
		$this->Modelanggota = new Modelanggota();
		helper('form');
	}
	public function index()
	{
		$data = [
			'title' => 'Anggota DPD DIY',
			'subtitle' => 'Anggota',
			'anggota' => $this->Modelanggota->getuser(session()->get('email')),
		];
		return view('admin/v_anggota', $data);
	}
	public function anggota_all()
	{
		$data = [
			'title' => 'Anggota DPD DIY',
			'subtitle' => 'Anggota',
			'anggota' => $this->Modelanggota->getalldata(),
		];
		return view('admin/v_anggota_all', $data);
	}
}
