<?php
class ProcessFormData extends CI_Controller {
  public function save()
  {
    $this->load->helper('html');
    $this->load->library('email');
    $this->load->helper('url');
    $this->load->library('session');
    $fd = $this->input->post();
    $es = $this->email;

    $fname = $fd['fname'];
    $lname = $fd['lname'];
    $postcode = $fd['postcode'];
    $email = $fd['email'];
    $gender = $fd['gender'];

    $message = '<html><body>';
    $message .= 'Dear '.$fname.',<br><br>';
    $message .= 'Thank you for registering your interest.<br>';
    $message .= 'You will be notified as soon as we are ready to connect you to the best Health and Beauty professionals in your area. And deliver services to your door.<br><br>';
    $message .= 'Koppi';
    $message .= '</body></html>';

    $config['mailtype'] = 'html';
    $es->initialize($config);
    
    $es->from('yue.shi@live.com', 'Koppi');
    $es->to($email);
    $es->subject('Thank you for registering your interest.');
    
    $es->message($message);
    $es->send();
    $es->print_debugger();

    $data['fname'] = $fname;
    //$data['styleLink'] = link_tag('assets/styles/form.css');

    //$this->load->view('CustTY.php', $data);
    $this->session->set_flashdata('data', $data);
    redirect('Confirm/showMessage', 'refresh');
  }
}
?>
