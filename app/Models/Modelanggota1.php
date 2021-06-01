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
	public function verifiedkota()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->where('id_dpc', 1)
			->get()
			->getResultArray();
	}
	public function verifiedbantul()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->where('id_dpc', 2)
			->get()
			->getResultArray();
	}
	public function verifiedkp()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->where('id_dpc', 3)
			->get()
			->getResultArray();
	}
	public function verifiedsleman()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->where('id_dpc', 4)
			->get()
			->getResultArray();
	}
	public function verifiedgk()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('status', 3)
			->where('id_dpc', 5)
			->get()
			->getResultArray();
	}
	public function anggotakota()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('id_dpc', 1)
			->get()
			->getResultArray();
	}
	public function anggotabantul()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('id_dpc', 2)
			->get()
			->getResultArray();
	}
	public function anggotakp()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('id_dpc', 3)
			->get()
			->getResultArray();
	}
	public function anggotasleman()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('id_dpc', 4)
			->get()
			->getResultArray();
	}
	public function anggotagk()
	{
		return $this->db->table('tbl_anggota')
			//->join('tbl_dpc', 'tbl_dpc.id_dpc = tbl_anggota.id_dpc', 'left')
			->join('tbl_agama', 'tbl_agama.id_agama = tbl_anggota.id_agama', 'left')
			->orderBy('tanggal', 'asc')
			->where('id_dpc', 5)
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

	public function total_data()
	{
		return $this->db->table('tbl_anggota')->countAll();
	}
	public function kp_data()
	{
		return $this->db->table('tbl_anggota')
			->where('id_dpc', 3)
			->countAllResults();
	}
	public function kota_data()
	{
		return $this->db->table('tbl_anggota')
			->where('id_dpc', 1)
			->countAllResults();
	}
	public function bantul_data()
	{
		return $this->db->table('tbl_anggota')
			->where('id_dpc', 2)
			->countAllResults();
	}
	public function sleman_data()
	{
		return $this->db->table('tbl_anggota')
			->where('id_dpc', 4)
			->countAllResults();
	}
	public function gk_data()
	{
		return $this->db->table('tbl_anggota')
			->where('id_dpc', 5)
			->countAllResults();
	}
	public function data_verified_all()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->countAllResults();
	}
	public function data_verified_kp()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->where('id_dpc', 3)
			->countAllResults();
	}
	public function data_verified_kota()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->where('id_dpc', 1)
			->countAllResults();
	}
	public function data_verified_bantul()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->where('id_dpc', 2)
			->countAllResults();
	}
	public function data_verified_sleman()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->where('id_dpc', 4)
			->countAllResults();
	}
	public function data_verified_gk()
	{
		return $this->db->table('tbl_anggota')
			->where('status', 3)
			->where('id_dpc', 5)
			->countAllResults();
	}
}
