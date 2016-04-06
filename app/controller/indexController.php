<?php

namespace App\Controller;

class indexController extends abstractController {
    
    public function index($request, $response, $args){      
        $model = new \App\Model\indexModel($this->db, $this->view);
        $data = ['first', 'second', 'third'];        
        $model->getData($data);
    }
    
}
