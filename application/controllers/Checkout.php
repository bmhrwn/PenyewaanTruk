<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('ModelCheckout');
    }

    
}