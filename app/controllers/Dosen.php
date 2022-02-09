<?php
    class Dosen extends Controller{

        public function index(){

            $data['dosen']=$this->model('Dosen_model')->getAllDsn();
            $this->view('templates/header');
            $this->view('dosen/index', $data);
            $this->view('templates/footer');
            
            
        }
    }
?>