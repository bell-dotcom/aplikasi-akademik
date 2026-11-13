<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
  
class Matakuliah extends CI_Controller { 
    public function __construct() { 
        parent::__construct(); 
        $this->load->model('Matakuliah_model'); 
    } 

    public function index() { 
        $data['matakuliah'] = $this->Matakuliah_model->get_all(); 
        $this->load->view('matakuliah/index', $data); 
    } 
} 