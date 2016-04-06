<?php

namespace App\Controller;

abstract class abstractController {
    
    public function __construct($container) {
        $this->db = $container->get('database');
        $this->view = $container->get('view');
    }
}