<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Maintenance {
  var $CI;
  public function maintenance() {
     $this->CI = & get_instance();
     $this->CI->config->load('maintenance_config'); // Load custom config file
     if ($this->CI->config->item("site_under_maintenance")) {
        include(APPPATH . '/views/maintenance.php');
        die();
     }
  }
}
?>