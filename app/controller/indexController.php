<?php

namespace App\Controller;

class indexController extends abstractController {
    
    public function index($request, $response, $args){      
        $model = new \App\Model\indexModel($this->db);
        
        $model->set('header_data','Damian war hier im Header');
        $model->set('body_data','Content und mehr');
        $model->set('footer_data','Footer soll es auch geben');

        return $this->view->renderer('template',[
            'data' => $model->getData()
        ]);
    }
    
}
