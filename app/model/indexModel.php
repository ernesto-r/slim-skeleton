<?php

namespace App\Model;

class indexModel extends abstractModel {
    
    public function getData() {        
        return $this->data;
    }
    
    public function set($key,$value) {
        $this->data[$key] = $value;
    }
}
