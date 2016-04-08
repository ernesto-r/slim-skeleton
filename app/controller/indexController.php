<?php

namespace App\Controller;

class indexController extends abstractController {
    
    public function index($request, $response, $args){      
        $model = new \App\Model\indexModel($this->db);
        $data = $model->getData();
        
        return $this->view->renderer('template',[
            'data' => $data
        ]);
    }
    
}
