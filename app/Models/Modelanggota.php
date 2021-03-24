<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelanggota extends Model
{
	public function getalldata()
	{
		return $this->db->table('tbl_anggota')
			->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('no_anggota', 'desc')
			->get()
			->getResultArray();
	}

	public function getuser($session)
	{
		return $this->db->table('tbl_anggota')
			->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('no_anggota', 'desc')
			->where('email', $session)
			->get()
			->getResultArray();
	}
	public function pengajuan()
	{
		return $this->db->table('tbl_anggota')
			->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 2)
			->get()
			->getResultArray();
	}
	public function data_verified()
	{
		return $this->db->table('tbl_anggota')
			->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->get()
			->getResultArray();
	}
	public function editdata($data)
	{
		$this->db->table('tbl_anggota')
			->where('id', $data['id'])
			->update($data);
	}

	public function cekdata($no_anggota)
	{
		return $this->db->table('tbl_anggota')
			->where('no_anggota', $no_anggota)
			->get()->getResult();
	}

	public function add($data)
	{
		return $this->db->table('tbl_anggota')->insert($data);
	}
}
