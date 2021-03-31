<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelanggota;
use App\Models\ModelDpc;
//use PHPExcel;
//use PHPExcel_IOFactory;


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
	//melihat semua data yang telah terverifikasi
	public function verified_all()
	{
		$data = [
			'title' => 'Data Telah Di Verifikasi',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'total_data' => $this->Modelanggota->data_verified_all(),
			'total_kp' => $this->Modelanggota->data_verified_kp(),
		];
		return view('admin/v_verified_all', $data);
	}
	public function upload()
	{
		$validation = \Config\Services::validation();

		$valid = $this->validate(
			[
				'fileimport' => [
					'label' => 'Inputan File',
					'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
					'errors' => [
						'uploaded' => '{field} Wajib diisi!!',
						'ext_in' => '{field} harus ekstensi xls / xlsx',
					]
				]
			]
		);
		if (!$valid) {
			$pesan = [
				'pesan' => $validation->getErrors()
			];
			$this->session->setFlashdata('pesan', $validation->getError('fileimport'));
			return redirect()->to(base_url('anggota/anggota_all'));
		} else {
			$file_excel = $this->request->getFile('fileimport');
			$ext = $file_excel->getClientExtension();

			if ($ext == 'xls') {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $render->load($file_excel);
			$data = $spreadsheet->getActiveSheet()->toArray();

			$pesan_error = [];
			$jumlaherror = 0;
			$jumlahsukses = 0;
			foreach ($data as $x => $row) {
				if ($x == 0) {
					continue;
				}
				$no_anggota = $row[1];
				$nama_anggota = $row[2];
				$tempat_lahir = $row[3];
				$tgl_lahir = $row[4];
				$jk = $row[5];
				$id_agama = $row[6];
				$alamat = $row[7];
				$kota_tinggal = $row[8];
				$hp = $row[9];
				$email = $row[10];
				$tempat_kerja = $row[11];
				$status_kepegawaian = $row[12];
				$id_dpc = $row[13];
				$level = $row[14];
				$status = $row[15];
				$tanggal = $row[16];


				//$db = \Config\Database::connect();
				//$cek = $db->table('tbl_anggota')->getWhere(['no_anggota' => $no_anggota])->getResult();
				$cek = $this->Modelanggota->cekdata($no_anggota);
				if (count($cek) > 0) {
					$jumlaherror++;
				} else {
					$data = [
						'no_anggota' => $no_anggota,
						'nama_anggota' => $nama_anggota,
						'tempat_lahir' => $tempat_lahir,
						'tgl_lahir' => $tgl_lahir,
						'jk' => $jk,
						'id_agama' => $id_agama,
						'alamat' => $alamat,
						'kota_tinggal' => $kota_tinggal,
						'hp' => $hp,
						'email' => $email,
						'tempat_kerja' => $tempat_kerja,
						'status_kepegawaian' => $status_kepegawaian,
						'id_dpc' => $id_dpc,
						'level' => $level,
						'status' => $status,
						'tanggal' => $tanggal,
					];
					//$db = table('tbl_anggota')->insert($datasimpan);
					$this->Modelanggota->add($data);
					$jumlahsukses++;
				}
			}
			$this->session->setFlashdata('sukses', "$jumlaherror Data Tidak Dapat Disimpan <br> $jumlahsukses Dapat Disimpan ");
			return redirect()->to(base_url('anggota/anggota_all'));
			// foreach ($pesan_error as $error) {
			// 	echo $error;
			// }
		}
	}
	public function statistik()
	{
		$data = [
			'title' => 'Anggota DPD DIY',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'total' => $this->Modelanggota->total_data(),
			'kp_data' => $this->Modelanggota->kp_data(),
			'kota_data' => $this->Modelanggota->kota_data(),
			'sleman_data' => $this->Modelanggota->sleman_data(),
			'gk_data' => $this->Modelanggota->gk_data(),
			'bantul_data' => $this->Modelanggota->bantul_data(),
		];
		return view('admin/v_statistik', $data);
	}
	public function anggota_kota()
	{
		$data = [
			'title' => 'Data Anggota Kota',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'anggota_kota' => $this->Modelanggota->anggotakota(),
		];
		return view('admin/v_anggota_kota', $data);
	}
	public function anggotabantul()
	{
		$data = [
			'title' => 'Data Anggota Bantul',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'anggota_bantul' => $this->Modelanggota->anggotabantul(),
		];
		return view('admin/v_anggota_bantul', $data);
	}
	public function anggotakp()
	{
		$data = [
			'title' => 'Data Anggota Kulonprogo',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'anggota_kp' => $this->Modelanggota->anggotakp(),
		];
		return view('admin/v_anggota_kp', $data);
	}
	public function anggotasleman()
	{
		$data = [
			'title' => 'Data Anggota Sleman',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'anggota_sleman' => $this->Modelanggota->anggotasleman(),
		];
		return view('admin/v_anggota_sleman', $data);
	}
	public function anggotagk()
	{
		$data = [
			'title' => 'Data Anggota Gunung Kidul',
			'subtitle' => 'Anggota',
			//'dpc' => $this->ModelDpc->getalldata(),
			'anggota_gk' => $this->Modelanggota->anggotagk(),
		];
		return view('admin/v_anggota_gk', $data);
	}
}
