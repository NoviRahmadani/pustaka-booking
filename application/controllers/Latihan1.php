<?php
class Latihan1 extends CI_Controller
{
    public function index ()
    {
        echo "Selamat Datang. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    } 
public function penjumlahan($n4, $n2)
{
  $this->load->model('Model_latihan1');
  $data['nilai4'] = $n4;
  $data['nilai2'] = $n2;
  $data['hasil'] = $this->Model_latihan1->jumlah($n4, $n2);
  
  
  $this->load->view('view-latihan1', $data);
}
       

}
