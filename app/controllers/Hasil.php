<?php

class Hasil extends Controller{
     
    public function index()
    {
        $data['nama'] = $_POST['nama'];
        $data['umur'] = $_POST['umur'];       
        $data['hasil'] = $this->model('HitungBMR_model')->hitungBMR1($_POST);

        $this->view('templates/header');
        $this->view('hasil/index', $data);
        $this->view('templates/footer');
    }

    public function hitung() {
         if($this->model('HitungBMR_model')->hitungBMR1($_POST)>1) {
            header('Location: '.BASEURL.'/hasil');
            exit();
         } else {
            header('Location: '.BASEURL.'/home');
            exit();
         }
    }


}



?>