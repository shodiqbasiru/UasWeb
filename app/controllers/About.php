<?php
class About extends Controller{ 


    public function index($nama1='shodiq',$nama2='basiru'){
        $data['nama1']=$nama1;
        $data['nama2']=$nama2; 
        $data['judul']='Halaman About';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');

    }
    public function page(){
        $this->view('about/page');
    }
}
?>