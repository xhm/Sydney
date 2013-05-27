<?php
class Confirm extends CI_Controller {
  public function showMessage() {
    $this->load->helper('html');
    $this->load->library('session');
    $data = $this->session->flashdata('data');
    $data['styleLink'] = link_tag('assets/styles/form.css');
    //if (isset($data['fname'])) {
      $this->load->view('CustTY.php', $data);
    //}
  }
}


