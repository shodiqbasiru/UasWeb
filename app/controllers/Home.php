<?php
class Home extends controller{
    public function index(){
        $data['judul']='Halaman Home';
        $data['alamat']=$this->model('User_model')->getData();
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function page($nama1,$nama2){
        echo"nama pertama saya adalah $nama1, nama panjang $nama2";
    }
}