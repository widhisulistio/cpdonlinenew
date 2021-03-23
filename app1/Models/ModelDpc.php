<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDpc extends Model
{
    public function getalldata()
    {
        return $this->db
            ->table('tbl_dpc')
            ->orderBy('id_dpc', 'ASC')
            ->get()
            ->getResultArray();
    }
}
