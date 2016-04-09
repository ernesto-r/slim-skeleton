<?php

namespace App\Controller;

class indexController extends abstractController {
    
    public function index($request, $response, $args){      
        $model = new \App\Model\indexModel($this->db);
        
        $model->set('header_data','Header content');
        $model->set('body_data','Body content');
        $model->set('footer_data','Footer content');

        return $this->view->render('template',[
            'data' => $model->getData()
        ]);
    }
    
}
