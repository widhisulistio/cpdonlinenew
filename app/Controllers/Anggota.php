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
	// public function import()
	// {
	// 	$file = $this->request->getFile('file_excel');
	// 	new PHPExcel;
	// 	//mengambil lokasi tempat file
	// 	$filelocation = $file->getTempName();
	// 	//baca file excel
	// 	$objPHPExcel = PHPExcel_IOFactory::load($filelocation);
	// 	//ambil sheet yang aktif
	// 	$sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true);
	// 	//melakukan perulangan untuk mengambil data excel
	// 	foreach ($sheet as $key => $data) {
	// 		//skip judul pada tabel di excel
	// 		if ($key == 1) {
	// 			continue;
	// 		}
	// 		//jika ada data yang sama
	// 		$no_anggota = $this->Modelanggota->cek_data($data['B']);
	// 		if ($data['B'] == $no_anggota['no_anggota']) {
	// 			# code...
	// 			continue;
	// 		}
	// 		$data = array(
	// 			'no_anggota' => $data['B'],
	// 			'nama_anggota' => $data['C'],
	// 			'tempat_lahir' => $data['D'],
	// 			'tgl_lahir' => $data['E'],
	// 			'jk' => $data['F'],
	// 			'id_agama' => $data['G'],
	// 			'alamat' => $data['H'],
	// 			'kota_tinggal' => $data['I'],
	// 			'hp' => $data['J'],
	// 			'email' => $data['K'],
	// 			'tempat_kerja' => $data['L'],
	// 			'status_kepegawaian' => $data['M'],
	// 			'id_dpc' => $data['N'],
	// 			'level' => $data['O'],
	// 			'status' => $data['P'],
	// 			'tanggal' => $data['Q'],
	// 		);
	// 		$this->Modelanggota->add($data);
	// 	}
	// 	session()->setFlashdata('pesan', 'Data Berhasil di Import');
	// 	return redirect()->to(base_url('anggota'));
	// }
}
