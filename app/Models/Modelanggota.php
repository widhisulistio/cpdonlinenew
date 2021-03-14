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
}
