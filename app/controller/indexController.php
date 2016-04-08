<?php

namespace App\Controller;

class indexController extends abstractController {
    
    public function index($request, $response, $args){      
        $model = new \App\Model\indexModel($this->db);
        $data = $model->getData();
        
        $view = new \App\View\indexView('template',[
            'data' => $data
        ]);
    }
    
}
