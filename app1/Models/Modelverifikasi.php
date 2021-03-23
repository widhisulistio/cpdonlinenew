<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelverifikasi extends Model
{
	public function login($email, $tgl_lahir)
	{
		return $this->db->table('tbl_anggota')->where([
			'email' => $email,
			'tgl_lahir' => $tgl_lahir,
		])->get()->getRowArray();
	}
}
