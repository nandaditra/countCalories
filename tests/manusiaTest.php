<?php


use PHPUnit\Framework\TestCase;

require __DIR__ ."/../app/models/Manusia_model.php";

class manusiaTest extends TestCase 
{
      function testManusia_model() {
          $test2 = new Manusia_model();
          
          $nama = "Nanda";

          $testing1 = $nama;
          $testing2 = $test2->tampil($nama);

          $this->assertEquals($testing1, $testing2);

      }
}

?>