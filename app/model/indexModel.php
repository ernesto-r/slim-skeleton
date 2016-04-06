<?php

namespace App\Model;

class indexModel extends abstractModel {
    
    public function getData($data) {
        //render
        echo $this->view->render('template', array('test' => $data));
    }
}
