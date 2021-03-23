<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelanggota;
use App\Models\ModelDpc;

class Anggota extends BaseController
{
	public function __construct()
	{
		$this->Modelanggota = new Modelanggota();
		$this->ModelDpc = new ModelDpc();
		helper('form');
	}
	public function index()
	{
		$data = [
			'title' => 'Anggota DPD DIY',
			'subtitle' => 'Anggota',
			'dpc' => $this->ModelDpc->getalldata(),
			'anggota' => $this->Modelanggota->getuser(session()->get('email')),
		];
		return view('admin/v_anggota', $data);
	}
	public function anggota_all()
	{
		$data = [
			'title' => 'Anggota DPD DIY',
			'subtitle' => 'Anggota',
			'anggota_all' => $this->Modelanggota->getalldata(),
		];
		return view('admin/v_anggota_all', $data);
	}
	public function editdata($id)
	{
		$data = [
			'id' => $id,
			'no_anggota' => $this->request->getPost('no_anggota'),
			'nama_anggota' => $this->request->getPost('nama_anggota'),
			'tgl_lahir' => $this->request->getPost('tgl_lahir'),
			'jk' => $this->request->getPost('jk'),
			'hp' => $this->request->getPost('hp'),
			'email' => $this->request->getPost('email'),
			'id_dpc' => $this->request->getPost('id_dpc'),
			'status' => $this->request->getPost('status'),
			'tanggal' => date('Y-m-d'),
		];
		$this->Modelanggota->editdata($data);
		session()->setFlashdata('edit', 'Permohonan Verifikasi Anda akan Segera Kami Proses, Terima Kasih');
		return redirect()->to(base_url('anggota'));
	}
	public function anggota_pengajuan()
	{
		$data = [
			'title' => 'Pengagajuan Verifikasi',
			'subtitle' => 'Anggota',
			'dpc' => $this->ModelDpc->getalldata(),
			'anggota' => $this->Modelanggota->pengajuan(),
		];
		return view('admin/v_anggota_pengajuan', $data);
	}
	public function anggota_verified()
	{
		$data = [
			'title' => 'Data Telah Di Verifikasi',
			'subtitle' => 'Anggota',
			'dpc' => $this->ModelDpc->getalldata(),
			'anggota' => $this->Modelanggota->data_verified(),
		];
		return view('admin/v_anggota_verified', $data);
	}
}
