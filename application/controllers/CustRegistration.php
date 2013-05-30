<?php

if (!defined('BASEPATH')) exit ('No direct script access');

class CustRegistration extends CI_Controller {
  
  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->load->helper('html');
    $styleLink_structure = link_tag('assets/styles/structure.css');
    $styleLink_form = link_tag('assets/styles/form.css');
    $styleLink_theme = link_tag('assets/styles/theme.css');
    $scriptTag_koppi = script_tag('assets/scripts/koppi.js');
    $scriptTag_form = script_tag('assets/scripts/form_validation.js');
    $data['styleLinks']['structure'] = $styleLink_structure;
    $data['styleLinks']['form'] = $styleLink_form;
    $data['styleLinks']['theme'] = $styleLink_theme;
    $data['scriptTags']['koppi'] = $scriptTag_koppi;
    $data['scriptTags']['form'] = $scriptTag_form;
    $this->load->view('CustRegistration', $data);
  }
}

?>
