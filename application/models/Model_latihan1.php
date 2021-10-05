<?php
class Model_latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai 
    public $nilai4, $nilai2, $hasil;

    //method penjumlahan 
    public function jumlah($nil4=null, $nil2=null)
{
$this->nilai4 = $nil4;
$this->nilai2 = $nil2;
$this->hasil = $this->nilai4 + $this->nilai2;
return $this->hasil;
}
}