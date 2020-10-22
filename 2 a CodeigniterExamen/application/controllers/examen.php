<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('helperexamen');
    }
	public function index()
	{
		$this->load->view('examen/headers');
        $this->load->view('examen/index');
	}
    public function loginindex(){
        $usu=$_POST['usuario'];
        $con=$_POST['contra'];
        
        if(comparacontra($usu,$con)==true){
            session_start();
            $_SESSION['user']=$usu;
            $this->load->view('examen/usuario');
        }else {
            $this->load->view('examen/error');
        }

    }

}
