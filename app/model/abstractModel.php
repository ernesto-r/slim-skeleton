<?php

namespace App\Model;

use MysqliDb as DB;

abstract class abstractModel {
    
    public function __construct(DB $db, $view) {
        $this->db = $db;
        $this->view = $view;
    }    
    
}
