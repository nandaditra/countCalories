<?php

class HitungBMR_model {
  
    // public function __construct($nama, $umur, $berat, $tinggi, $jenisKelamin, $skala){
    //     parent::__construct($nama, $umur, $berat, $tinggi, $jenisKelamin);
    //     $this->skala = $skala;
    // }

    public function hitungBMR1($data) {

        $this->berat = $data['berat'];
        $this->tinggi = $data['tinggi'];
        $this->umur = $data['umur'];
        $this->jenisKelamin = $data['kelamin'];
        $this->skala = $data['aktivitas'];

        $hasilHitung = 0;
        $hasilKalkulasi = 0;
        $totalKKal =0;

        if($this->jenisKelamin=="Pria") {
                $hasilHitung = (88.4+(13.4*$this->berat))+(4.8*$this->tinggi)-(5.68*$this->umur);
        } else {
                $hasilHitung = (447.6+(9.25*$this->berat))+(3.10*$this->tinggi)-(4.33*$this->umur);
        }
        
        switch($this->skala) {
            case "Tidak Aktif":
                $hasilKalkulasi = $hasilHitung*1.2;
                break;
            case "Sedikit Aktif":
                $hasilKalkulasi = $hasilHitung*1.375;
                break;
            case "Cukup Aktif":
                $hasilKalkulasi = $hasilHitung*1.55;
                break;
            case "Sangat Aktif":
                $hasilKalkulasi =  $hasilHitung*1.725;
                break;
            case "Ekstra Aktif":
                $hasilKalkulasi = $hasilHitung*1.9;
                break;
            }
    
        $totalKKal = $hasilKalkulasi;

        return  $totalKKal;
    }

    
    
}
