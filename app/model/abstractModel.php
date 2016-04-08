<?php

namespace App\Model;

use MysqliDb as DB;

abstract class abstractModel {
    protected $data = [];
    
    public function __construct(DB $db) {
        $this->db = $db;
    }    
    
}
