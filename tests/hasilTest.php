<?php

use PHPUnit\Framework\TestCase;

require __DIR__ ."/../app/models/HitungBMR_model.php";

class hasilTest extends TestCase 
{
     public function testhitungBMR1() {
          $test1 = new HitungBMR_model();
          $test2 = new HitungBMR_model();
        
          $data = [];

          $data['berat'] = 60;
          $data['tinggi'] = 175;
          $data['umur'] = 20;
          $data['kelamin'] ="Pria";
          $data['aktivitas'] = "Ekstra Aktif";
          
          $testing1 = $test1->hitungBMR1($data);
          $testing2 = $test2->hitungBMR1($data);

          $this->assertEquals($testing1, $testing2);
     }
}
?>