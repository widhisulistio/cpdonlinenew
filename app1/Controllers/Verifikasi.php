<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelanggota;
use App\Models\Modelverifikasi;


class Verifikasi extends BaseController
{
	public function __construct()
	{
		$this->Modelverifikasi = new Modelverifikasi();
		$this->Modelanggota = new Modelanggota();
		helper('form');
	}
	public function index()
	{
		$data = array(
			'title' => 'Login',
		);
		return view('v_login', $data);
	}
	public function cek_verifikasi()
	{
		if ($this->validate([

			'email' => [
				'label'  => 'E-Mail',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi!!'
				]
			],
			'tgl_lahir' => [
				'label'  => 'Tanggal Lahir',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field}  Wajib Diisi!!'
				]
			],
		])) {
			//jika valid
			$email = $this->request->getPost('email');
			$tgl_lahir = $this->request->getPost('tgl_lahir');
			$cek = $this->Modelverifikasi->login($email, $tgl_lahir);
			if ($cek) {
				//jika data ada
				session()->set('log', true);
				session()->set('no_anggota', $cek['no_anggota']);
				session()->set('nama_anggota', $cek['nama_anggota']);
				session()->set('tempat_lahir', $cek['tempat_lahir']);
				session()->set('tgl_lahir', $cek['tgl_lahir']);
				session()->set('jk', $cek['jk']);
				session()->set('id_agama', $cek['id_agama']);
				session()->set('alamat', $cek['alamat']);
				session()->set('kota_tinggal', $cek['kota_tinggal']);
				session()->set('hp', $cek['hp']);
				session()->set('email', $cek['email']);
				session()->set('tempat_kerja', $cek['tempat_kerja']);
				session()->set('status_kepegawaian', $cek['status_kepegawaian']);
				session()->set('id_dpc', $cek['id_dpc']);
				session()->set('level', $cek['level']);
				session()->set('status', $cek['status']);
				return redirect()->to(base_url('anggota'));
			} else {
				session()->setFlashdata('pesan', 'Login Gagal!!!, Email atau Tanggal Lahir Salah!!');
				return redirect()->to(base_url('verifikasi/index'));
			}
		} else {
			//jika tidak valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('verifikasi/index'));
		}
	}
	public function logout()
	{
		session()->remove('log');
		session()->remove('no_anggota');
		session()->remove('nama_anggota');
		session()->remove('tempat_lahir');
		session()->remove('tgl_lahir');
		session()->remove('jk');
		session()->remove('id_agama');
		session()->remove('alamat');
		session()->remove('kota_tinggal');
		session()->remove('hp');
		session()->remove('email');
		session()->remove('tempat_kerja');
		session()->remove('status_kepegawaian');
		session()->remove('id_dpc');

		session()->setFlashdata('pesan', 'Anda Berhasil Logout');
		return redirect()->to(base_url('verifikasi'));
	}
}
